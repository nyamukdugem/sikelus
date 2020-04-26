<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['contentheader'] = 'Dashboard';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('admin/dashboard', FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function siswa()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['contentheader'] = 'Data Siswa';
		$data['boxtitle'] = 'Daftar Siswa';
		$data['siswa'] = $this->m_admin->daftarSiswa();

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('siswa/index.php', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function addSiswa()
	{
		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('nis', 'nis', 'trim|required|max_length[7]');
		$this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'trim|required');
		$this->form_validation->set_rules('tmpt_lahir', 'tmpt_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('nopes', 'nopes', 'trim|required|max_length[14]');
		$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');

		if( $this->form_validation->run() == false){
			$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
			$data['contentheader'] = 'Data Siswa';
			$data['boxtitle'] = 'Tambah Siswa';

			$this->load->view('template/header', $data, FALSE);
			$this->load->view('siswa/add', $data, FALSE);
			$this->load->view('template/footer', FALSE);
		}else{
			$this->m_admin->addSiswa();
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
			redirect('admin/siswa');
		}
	}

	public function editSiswa($nisn)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->m_admin->getSiswaById($nisn);
		$data['contentheader'] = 'Data Siswa';
		$data['boxtitle'] = 'Edit Siswa';

		$this->form_validation->set_rules('nis', 'nis', 'trim|required|max_length[7]');
		$this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'trim|required');
		$this->form_validation->set_rules('tmpt_lahir', 'tmpt_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('nopes', 'nopes', 'trim|required|max_length[14]');
		$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');

		if( $this->form_validation->run() == false){
			$this->load->view('template/header', $data, FALSE);
			$this->load->view('siswa/edit', $data, FALSE);
			$this->load->view('template/footer', FALSE);

		}else{
			$this->m_admin->editSiswa();
			$this->session->set_flashdata('success', 'Berhasil Diubah');
			redirect('admin/siswa');
		}

	}

	public function deleteSiswa($nisn)
	{
		$this->db->delete('siswa', ['nisn' => $nisn]);
		$this->session->set_flashdata('success', 'Berhasil dihapus');
		redirect('admin/siswa');
	}

	public function emptySiswa()
	{
		$this->m_admin->emptySiswa();
		$this->session->set_flashdata('success', 'Berhasil dihapus');
			redirect('admin/siswa');
	}

	public function semester()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiSemester();
		$data['contentheader'] = 'Nilai Rata-Rata Rapor';
		$data['boxtitle'] = 'Nilai Rata-Rata';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('semester/index.php', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function addSemester()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->m_admin->daftarSiswa();
		$data['contentheader'] = 'Nilai Rata-Rata Rapor';
		$data['boxtitle'] = 'Tambah Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('semester/add', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function saveSemester()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"    => $_POST['nisn'][$key],
				"agama_s" => $_POST['agama_s'][$key],
				"pkn_s"   => $_POST['pkn_s'][$key],
				"bi_s"    => $_POST['bi_s'][$key],
				"mtk_s"   => $_POST['mtk_s'][$key],
				"ipa_s"   => $_POST['ipa_s'][$key],
				"ips_s"   => $_POST['ips_s'][$key],
				"sbk_s"   => $_POST['sbk_s'][$key],
				"pjok_s"  => $_POST['pjok_s'][$key],
				"bmr_s"   => $_POST['bmr_s'][$key],
				"bing_s"  => $_POST['bing_s'][$key]
			);
		}

		$test = $this->db->insert_batch('semester', $result);
		if($test){
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
			redirect('admin/semester');
			 }else{
			 	$this->session->set_flashdata('error', 'Gagal Disimpan');
				redirect('admin/addSemester');
			}
	}

	public function editSemester()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiSemester();
		$data['contentheader'] = 'Rata-Rata Nilai Semester';
		$data['boxtitle'] = 'Edit Nilai Semester';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('semester/edit', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function updateSemester()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"    => $_POST['nisn'][$key],
				"agama_s" => $_POST['agama_s'][$key],
				"pkn_s"   => $_POST['pkn_s'][$key],
				"bi_s"    => $_POST['bi_s'][$key],
				"mtk_s"   => $_POST['mtk_s'][$key],
				"ipa_s"   => $_POST['ipa_s'][$key],
				"ips_s"   => $_POST['ips_s'][$key],
				"sbk_s"   => $_POST['sbk_s'][$key],
				"pjok_s"  => $_POST['pjok_s'][$key],
				"bmr_s"   => $_POST['bmr_s'][$key],
				"bing_s"  => $_POST['bing_s'][$key]
			);
		}

		$test = $this->db->update_batch('semester', $result, 'nisn');

		if($test){
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
			redirect('admin/semester');
		}else{
			$this->session->set_flashdata('error', 'Gagal Disimpan');
			redirect('admin/editSemester');
		}
	}

	public function emptySemester()
	{
		$this->m_admin->emptySemester();
		$this->session->set_flashdata('success', 'Berhasil dihapus');
			redirect('admin/semester');
	}

	public function us()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiUs();
		$data['contentheader'] = 'Nilai Ujian Sekolah';
		$data['boxtitle'] = 'Daftar Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('us/index.php', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function addUs()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->m_admin->daftarSiswa();
		$data['contentheader'] = 'Nilai Ujian Sekolah';
		$data['boxtitle'] = 'Tambah Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('us/add', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function saveUs()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"  => $_POST['nisn'][$key],
				"agama" => $_POST['agama'][$key],
				"pkn"   => $_POST['pkn'][$key],
				"ips"   => $_POST['ips'][$key],
				"sbk"   => $_POST['sbk'][$key],
				"pjok"  => $_POST['pjok'][$key],
				"bmr"   => $_POST['bmr'][$key],
				"bing"  => $_POST['bing'][$key]
			);
		}

		$test = $this->db->insert_batch('us', $result);
		if($test){
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
			redirect('admin/us'); }else{
				$this->session->set_flashdata('error', 'Gagal Disimpan');
				redirect('admin/addUs');
			}
	}

	public function editUs()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiUs();
		$data['contentheader'] = 'Nilai Ujian Sekolah';
		$data['boxtitle'] = 'Edit Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('us/edit', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function updateUs()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"  => $_POST['nisn'][$key],
				"agama" => $_POST['agama'][$key],
				"pkn"   => $_POST['pkn'][$key],
				"ips"   => $_POST['ips'][$key],
				"sbk"   => $_POST['sbk'][$key],
				"pjok"  => $_POST['pjok'][$key],
				"bmr"   => $_POST['bmr'][$key],
				"bing"  => $_POST['bing'][$key]
			);
		}

		$test = $this->db->update_batch('us', $result, 'nisn');

		if($test){
			$this->session->set_flashdata('success', 'Berhasil Diubah');
			redirect('admin/us');
		}else{
			$this->session->set_flashdata('error', 'Gagal Diubah');
			redirect('admin/editUs');
		}
	}

	public function emptyUs()
	{
		$this->m_admin->emptyUs();
		$this->session->set_flashdata('success', 'Berhasil Dihapus');
			redirect('admin/us');
	}

	public function usbn()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiUsbn();
		$data['contentheader'] = 'Nilai Ujian Sekolah Berstandar Nasional';
		$data['boxtitle'] = 'Daftar Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('usbn/index.php', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function addUsbn()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->m_admin->daftarSiswa();
		$data['contentheader'] = 'Nilai Ujian Sekolah Berstandar Nasional';
		$data['boxtitle'] = 'Tambah Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('usbn/add', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function saveUsbn()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"       => $_POST['nisn'][$key],
				"bi_pg"      => $_POST['bi_pg'][$key],
				"bi_uraian"  => $_POST['bi_uraian'][$key],
				"bi_na"      => $_POST['bi_na'][$key],
				"mtk_pg"     => $_POST['mtk_pg'][$key],
				"mtk_uraian" => $_POST['mtk_uraian'][$key],
				"mtk_na"     => $_POST['mtk_na'][$key],
				"ipa_pg"     => $_POST['ipa_pg'][$key],
				"ipa_uraian" => $_POST['ipa_uraian'][$key],
				"ipa_na"     => $_POST['ipa_na'][$key]
			);
		}

		$test = $this->db->insert_batch('usbn', $result);
		if($test){
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
			redirect('admin/usbn'); }else{
				$this->session->set_flashdata('error', 'Gagal Disimpan');
			redirect('admin/addUsbn');
			}
	}

	public function editUsbn()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['nilai'] = $this->m_admin->daftarNilaiUsbn();
		$data['contentheader'] = 'Nilai Ujian Sekolah Berstandar Nasional';
		$data['boxtitle'] = 'Edit Nilai';

		$this->load->view('template/header', $data, FALSE);
		$this->load->view('usbn/edit', $data, FALSE);
		$this->load->view('template/footer', FALSE);
	}

	public function updateUsbn()
	{
		$nm = $this->input->post('nisn');
		$result = array();
		foreach($nm as $key => $val){
			$result[] = array(
				"nisn"       => $_POST['nisn'][$key],
				"bi_pg"      => $_POST['bi_pg'][$key],
				"bi_uraian"  => $_POST['bi_uraian'][$key],
				"bi_na"      => $_POST['bi_na'][$key],
				"mtk_pg"     => $_POST['mtk_pg'][$key],
				"mtk_uraian" => $_POST['mtk_uraian'][$key],
				"mtk_na"     => $_POST['mtk_na'][$key],
				"ipa_pg"     => $_POST['ipa_pg'][$key],
				"ipa_uraian" => $_POST['ipa_uraian'][$key],
				"ipa_na"     => $_POST['ipa_na'][$key]
			);
		}

		$test = $this->db->update_batch('usbn', $result, 'nisn');

		if($test){
			$this->session->set_flashdata('success', 'Berhasil Diubah');
			redirect('admin/usbn');
		}else{
			$this->session->set_flashdata('error', 'Gagal Disimpan');
			redirect('admin/editUsbn');
		}
	}

	public function emptyUsbn()
	{
		$this->m_admin->emptyUsbn();
		$this->session->set_flashdata('success', 'Berhasil Dihapus');
			redirect('admin/usbn');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */