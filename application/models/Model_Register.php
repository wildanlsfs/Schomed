<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Register extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');
	}

	public function registerSiswa($data)
	{
		
		$condition = "Email =" . "'" . $data['Email'] . "'";
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {

			$this->db->insert('siswa', $data);

			if ($this->db->affected_rows() > 0) {

				$condition = "Email =" . "'" . $data['Email'] . "'";
				$this->db->select('ID');
				$this->db->from('siswa');
				$this->db->where($condition);
				$this->db->limit(1);
				
				$query = $this->db->get();

				$result = $query->row();

				$date1 = new DateTime();
				$date1 = $date1->format('Y-m-d H:i:s');

				$date2 = new DateTime('1 week');
				$date2 = $date2->format('Y-m-d H:i:s');

				$tanggal = array(
					'IDSiswa'				=> $result->ID,
					'TanggalPendaftaran' 	=> $date1,
					'MaksimalPembayaran'	=> $date2 
					);

				$this->db->insert('waiting_list', $tanggal);

				if($this->db->affected_rows() == 1){
					return 1;
				}
				else{
					return -1;	
				}

			}
		} 
		else 
		{
			return -1;
		}
	}

	public function registerTentor($data)
	{
		
		$condition = "Email =" . "'" . $data['Email'] . "'";
		$this->db->select('*');
		$this->db->from('tentor');
		$this->db->where($condition);
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if ($query->num_rows() == 0) {

			$date1 = new DateTime();
			$date2 = new DateTime('1 week');
			
			$data['TanggalDaftar'] = $date1->format('Y-m-d H:i:s');
			$data['MaksimalKonfirmasi'] = $date2->format('Y-m-d H:i:s');

			$this->db->insert('tentor', $data);

			if($this->db->affected_rows() == 1){
				return 1;
			}
			else{
				return -1;	
			}
		} 
		else 
		{
			return -1;
		}
	}
}