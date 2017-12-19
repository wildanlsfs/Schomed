<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model {

	public function listRequest()
	{
		$data = array(
		'reqSiswa' 		=> $this->db->query("SELECT IDSiswa,NamaSiswa,MaksimalPembayaran,BuktiPembayaran FROM waiting_list WHERE Status=0"),
		'reqTentor' 	=> $this->db->query("SELECT ID,NamaLengkap,MaksimalKonfirmasi,BuktiPrestasi FROM tentor WHERE Status='Waiting'")
		);

		return $data;
	}

	public function acceptRequest()
	{
		
	}

	public function declineRequest()
	{
		
	}

	public function listSalary()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, Gaji FROM tentor");
		return $query;
	}

	public function listComments()
	{
		$query = $this->db->query("SELECT * FROM Komentar ORDER BY ID DESC LIMIT 50");
		return $query;
	}

}

/* End of file Model_Admin.php */
/* Location: ./application/models/Model_Admin.php */