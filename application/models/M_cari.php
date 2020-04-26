<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cari extends CI_Model {

	function cariData()
	{
		$keyword = htmlspecialchars($this->input->post('keyword', true));
		// percobaan 1
		$this->db->select('*');
		$this->db->from('siswa');
		// $this->db->join('semester', 'siswa.nisn = semester.nisn', 'inner');
		// $this->db->join('us', 'siswa.nisn = us.nisn', 'inner');
		// $this->db->join('usbn', 'siswa.nisn = usbn.nisn', 'inner');
		$this->db->like('nisn', $keyword, 'match');
		// $this->db->where('nisn', $keyword);

		return $this->db->get();

	}

	function nilaiSemester()
	{
		$keyword = htmlspecialchars($this->input->post('keyword', true));
		$this->db->select('*');
		$this->db->from('semester');
		$this->db->like('nisn', $keyword);

		return $this->db->get()->result_array();
	}

	function nilaiUs()
	{
		$keyword = htmlspecialchars($this->input->post('keyword', true));
		$this->db->select('*');
		$this->db->from('us');
		$this->db->like('nisn', $keyword);

		return $this->db->get()->result_array();
	}

	function nilaiUsbn()
	{
		$keyword = htmlspecialchars($this->input->post('keyword', true));
		$this->db->select('*');
		$this->db->from('usbn');
		$this->db->like('nisn', $keyword);

		return $this->db->get()->result_array();
	}

}

/* End of file M_cari.php */
/* Location: ./application/models/M_cari.php */