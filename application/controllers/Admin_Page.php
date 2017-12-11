<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Page extends CI_Controller {

	public function index()
	{
		$this->load->view('v_admin');
	}

	public function login()
	{
		$this->load->view('v_admin_auth');
	}

	public function auth()
	{
		# code...
	}

	public function CRUD($value='')
	{
		# code...
	}

	public function author()
	{
		$this->load->view('v_author');
	}

}

/* End of file Admin_Page.php */
/* Location: ./application/controllers/Admin_Page.php */