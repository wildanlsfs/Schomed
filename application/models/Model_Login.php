<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Login extends CI_Model {

	public function loginSiswa($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('auth_siswa');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}	

	public function loginTentor($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('auth_tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}

	public function getIDTentor($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('auth_tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result_array();

		if ($query->num_rows() == 1) 
		{
			return $query[0]['ID'];
		}
	}

	public function getIDSiswa($data)
	{
		$condition = "Email =" . "'" . $data['Email'] . "' AND " . "Pass =" . "'" . $data['Pass'] . "'";
		$this->db->select('*');
		$this->db->from('auth_siswa');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->result_array();

		if ($query->num_rows() == 1) 
		{
			return $query[0]['ID'];
		}
	}

}