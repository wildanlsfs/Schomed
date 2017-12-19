<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Admin');
	}

	public function index()
	{
		$dataReq 		= $this->Model_Admin->listRequest();

		$data = array(
			'reqTentor'		=> $dataReq['reqTentor'],
			'reqSiswa'		=> $dataReq['reqSiswa'],
			'dataSalary' 	=> $this->Model_Admin->listSalary(),
			'dataTeacher' 	=> 1,
			'dataStudent' 	=> 1,
			'dataAuthor' 	=> 1,
			'dataComment'	=> $this->Model_Admin->listComments()
		);
		$this->load->view('v_admin',$data);
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

	public function addArticle()
	{
		$date = new DateTime();
		$date = $date->format('Y-m-d H:i:s');

		$data = array(
			"Title"			=> $this->input->post("title"),
			"Content"		=> $this->input->post("content"),
			"Author"		=> "Semut Liar",
			"CreatedTime"	=> $date
		);

		$this->db->insert('article', $data);

		redirect('author', 'refresh');
	}

	public function teacher()
	{
		$this->load->view('v_tentor');
	}

	public function student()
	{
		$this->load->view('v_siswa');
	}

}

/* End of file Admin_Page.php */
/* Location: ./application/controllers/Admin_Page.php */