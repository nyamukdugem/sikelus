<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function daftarSiswa()	
	{
		$this->db->order_by('nama_siswa', 'ASC');
		return $this->db->get('siswa')->result_array();
	}

	function getSiswa()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('us', 'us.nisn = siswa.nisn', 'inner');

		$query = $this->db->get()->result_array();
	}

	function daftarNilaiUs()
	{
		$this->db->order_by('nama_siswa', 'ASC');
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('us', 'us.nisn = siswa.nisn', 'inner');
		return $this->db->get()->result_array();
	}

	function daftarNilaiSemester()
	{
		$this->db->order_by('nama_siswa', 'ASC');
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('semester', 'semester.nisn = siswa.nisn', 'inner');
		return $this->db->get()->result_array();
	}

	function importSiswa($data = array())
	{
		$jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('siswa', $data);
        }
	}

	function importSemester($data = array())
	{
		$jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('semester', $data);
        }
	}

	function importUs($data = array())
	{
		$jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('us', $data);
        }
	}

	function importUsbn($data = array())
	{
		$jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('usbn', $data);
        }
	}

	function getSiswaById($nisn)
	{
		return $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();
	}

	function addSiswa()
	{
		$data = [
				'nisn' => htmlspecialchars($this->input->post('nisn', true)),
				'nis' => htmlspecialchars($this->input->post('nis', true)),
				'nopes' => htmlspecialchars($this->input->post('nopes', true)),
				'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
				'tmpt_lahir' => htmlspecialchars($this->input->post('tmpt_lahir', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
				'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true))
			];

			$this->db->insert('siswa', $data);
	}

	function editSiswa()
	{
		$data = [
				'nis' => htmlspecialchars($this->input->post('nis', true)),
				'nopes' => htmlspecialchars($this->input->post('nopes', true)),
				'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
				'tmpt_lahir' => htmlspecialchars($this->input->post('tmpt_lahir', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
				'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true))
			];

		$this->db->where('nisn', $this->input->post('nisn'));
		$this->db->update('siswa', $data);
	}

	function emptySiswa()
	{
		$this->db->empty_table('siswa');
	}

	function emptySemester()
	{
		$this->db->empty_table('semester');
	}

	function emptyUs()
	{
		$this->db->empty_table('us');
	}

	function emptyUsbn()
	{
		$this->db->empty_table('usbn');
	}

	function daftarNilaiUsbn()
	{
		$this->db->order_by('nama_siswa', 'ASC');
		$this->db->select('*');
		$this->db->from('usbn');
		$this->db->join('siswa', 'siswa.nisn = usbn.nisn', 'inner');

		return $this->db->get()->result_array();
	}

}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */