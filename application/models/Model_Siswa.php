<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Siswa extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');
	}

	public function getData($id)
	{

		$condition = "ID =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('siswa');
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
		$this->db->from('siswa');
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
		$condition = "IDSiswa =" . "'" . $id . "'";
		$this->db->select('BuktiPembayaran');
		$this->db->from('waiting_list');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$query = $query->row();

		if ($query->BuktiPembayaran != NULL) 
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
		$this->db->from('siswa');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$row = $query->row();
		
		return $row->Status;
	}

	public function fillData1($data)
	{	
		$condition = "ID =" . "'" . $_SESSION['ID'] . "'";
		$this->db->set($data);
		$this->db->where($condition);
		$this->db->update('siswa');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function addToWaitingList($data)
	{
		$condition = "IDSiswa =" . "'" . $_SESSION['ID'] . "'";
		$this->db->set($data);
		$this->db->where($condition);
		$this->db->update('waiting_list');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function addCourse($data)
	{
		return $this->db->insert('jadwal',$data);
	}

	public function fillData2($data)
	{
		$condition = "IDSiswa =" . "'" . $_SESSION['ID'] . "'";
		$this->db->set($data);
		$this->db->where($condition);
		$this->db->update('waiting_list');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}