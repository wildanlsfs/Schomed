<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index($offset = 0)
	{

	}

	public function add()
	{
		$data = array(
			'fullname' 		=> $this->input->post('fname'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'email' 		=> $this->input->post('email'),
			'pass' 			=> $this->input->post('pass'),
		);

		if($this->input->post('selector') == "siswa"){
			$this->db->insert('siswa', $data);
		}
		else{
			$this->db->insert('tentor', $data);
		}

		redirect('signin','refresh');
	}

	public function update($id = NULL)
	{
		
	}

	public function delete($id = NULL)
	{
		
	}
}