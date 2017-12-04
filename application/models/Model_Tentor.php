<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Tentor extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');
	}

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
			return $query->row();
		} 
		else 
		{
			return -1;
		}
	}

	public function checkData1($id)
	{
		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('NamaLengkap');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$query = $query->row();

		if ($query->NamaLengkap != NULL) 
		{
			return 1;
		} 
		else 
		{
			return -1;
		}
	}

	public function checkData2($id)
	{
		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('BuktiPrestasi');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$query = $query->row();

		if ($query->BuktiPrestasi != NULL) 
		{
			return 1;
		} 
		else 
		{
			return -1;
		}
	}

	public function checkData3($id)
	{
		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('Status');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$row = $query->row();
		
		return $row->Status;
	}

	public function fillData1($data)
	{	
		$condition = "ID =" . "'" . $_SESSION['ID'] . "'";
		$this->db->where($condition);
		$this->db->update('tentor',$data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function addProgram($val)
	{	
		$data = array(
			'IDTentor' 	=> $_SESSION['ID'],
			'Program' 	=> $val
		);
		return $this->db->insert('program',$data);
	}

	public function addCourse($val)
	{
		$data = array(
			'IDTentor' 	=> $_SESSION['ID'],
			'Mapel' 	=> $val
		);
		return $this->db->insert('mapel',$data);
	}

	public function fillData2($data)
	{
		$condition = "ID =" . "'" . $_SESSION['ID'] . "'";
		$this->db->set($data);
		$this->db->where($condition);
		$this->db->update('tentor');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	
	public function getTutor($data,$data2)
	{
		$query = $this->db->query("SELECT ID,NamaLengkap FROM tentor WHERE 
			ID = (SELECT IDTentor FROM mapel WHERE Mapel = '$data' 
			AND 
			ID = (SELECT IDTentor FROM tentor WHERE STATUS = 'Available')
			AND 
			ID = (SELECT IDTentor FROM program WHERE program = '$data2')
		);");	
		return $query->result();
	}	

}
