<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Login extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');
	}

	public function loginSiswa($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		

		if ($query->num_rows() == 1) 
		{
			$row = $query->row();
			return $row->ID;
		} 
		else 
		{
			return -1;
		}
	}	

	public function loginTentor($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		

		if ($query->num_rows() == 1) 
		{
			$row = $query->row();
			return $row->ID;
		} 
		else 
		{
			return -1;
		}
	}

}