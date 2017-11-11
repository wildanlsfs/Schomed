<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tentor extends CI_Model {

	public function getData($id)
	{

		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		} 
		else 
		{
			return false;
		}
	}

	public function checkData1($data)
	{
		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('NamaLengkap');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return TRUE;
		} 
		else 
		{
			return false;
		}
	}

	public function checkData2($data)
	{
		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('BuktiPrestasi');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return TRUE;
		} 
		else 
		{
			return false;
		}
	}

	public function fillData1($data)
	{
		
	}

	public function fillData2($data)
	{
		
	}

}
