<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Page extends CI_Controller {

	public function index()
	{
		$this->load->view('v_admin');
	}

	public function FunctionName()
	{
		$this->load->view('View File', $data, FALSE);
	}

}

/* End of file Admin_Page.php */
/* Location: ./application/controllers/Admin_Page.php */