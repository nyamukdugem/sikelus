<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cari');
	}

	public function index()
	{
		$this->load->view('home/coming',FALSE);
	}

	public function search()
	{
		$this->form_validation->set_rules('keyword', 'NISN', 'trim|required|min_length[10]|max_length[11]');

		if($this->form_validation->run() == false){
			$this->load->view('home/search1', FALSE);
		}else{

			if($this->input->post('keyword')){
				$data['hasil'] = $this->m_cari->cariData()->result_array();
				if ($this->m_cari->cariData()->num_rows() == 0) {
					$this->session->set_flashdata('error', 'NISN tidak terdaftar');
				}
				$data['semester'] = $this->m_cari->nilaiSemester();
				$data['us'] = $this->m_cari->nilaiUs();
				$data['usbn'] = $this->m_cari->nilaiUsbn();
				$this->load->view('home/search1', $data, FALSE);
			}
		}	
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */