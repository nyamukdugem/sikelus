<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->session->userdata('email')){
			redirect('admin/siswa');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if($this->form_validation->run() == false){
			$this->load->view('auth', FALSE);
		}else{
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'nama' => $user['nama']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success', 'Berhasil Login');
        		redirect('admin/siswa');
			} 
		}else{
			 $this->session->set_flashdata('error', 'Email is not registered!');
            redirect('auth');
		} $this->session->set_flashdata('error', 'Email or password wrong!');
            redirect('auth');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama');

		$this->session->set_flashdata('success', 'Berhasil Logout');
        redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */