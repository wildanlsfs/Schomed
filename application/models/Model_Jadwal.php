<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Jadwal extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('encryption');
	}

	public function isiJadwal($data)
	{
		$this->db->insert('Jadwal', $data);
	}

	public function updateJadwal($id)
	{

	}

	public function chectJadwal($id)
	{
		
	}

}

/* End of file Model_Jadwal.php */
/* Location: ./application/models/Model_Jadwal.php */