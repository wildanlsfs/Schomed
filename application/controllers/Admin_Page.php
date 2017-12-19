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
		$this->load->view('v_admin_auth');
	}

	public function admin()
	{
		if(!isset($_SESSION['logged_in_admin'])){
			redirect('admin/login','refresh');
		}

		$dataReq 		= $this->Model_Admin->listRequest();

		$data = array(
			'reqTentor'		=> $dataReq['reqTentor'],
			'reqSiswa'		=> $dataReq['reqSiswa'],
			'dataSalary' 	=> $this->Model_Admin->listSalary(),
			'dataTeacher' 	=> $this->Model_Admin->listTeacher(),
			'dataStudent' 	=> $this->Model_Admin->listStudent(),
			'dataAuthor' 	=> $this->Model_Admin->listAuthor(),
			'dataComment'	=> $this->Model_Admin->listComments()
		);
		$this->load->view('v_admin',$data);
	}

	public function auth()
	{

		$data = array(
			'Username' 	=> $this->input->post('username'),
			'Pass' 		=> md5($this->input->post('pass'))
		);
		$status = $this->Model_Admin->login($data);
		
		if($status == NULL){
			$errorMessage = "Anda tidak terdaftar";
			$this->session->set_userdata($errorMessage);
			redirect('admin/login','refresh');
		}
		else {

			$newData = array(
				'ID' 				=> $status->ID,
				'logged_in_admin'  	=> TRUE,
				'Username' 			=> $data['Username']
			);

			$this->session->set_userdata($newData);
			
			if($status->Authority == 1){
				redirect('admin','refresh');
			}

			else{
				redirect('author','refresh');
			}
		}

	}

	public function CRUD($value='')
	{
		# code...
	}

	public function author()
	{
		if(!isset($_SESSION['logged_in_admin'])){
			redirect('admin/login','refresh');
		}

		$this->load->view('v_author');
	}

	public function addArticle()
	{
		$date = new DateTime();
		$date = $date->format('Y-m-d H:i:s');

		$data = array(
			"Title"			=> $this->input->post("title"),
			"Content"		=> $this->input->post("content"),
			"Author"		=> $_SESSION['Username'],
			"CreatedTime"	=> $date
		);

		$this->db->insert('article', $data);

		redirect('author', 'refresh');
	}

	public function addAuthor()
	{
		$data = array(
			"Username"		=> $this->input->post("uname"),
			"Pass"			=> md5($this->input->post("pass"))
		);

		$this->db->insert('admin', $data);

		redirect('admin', 'refresh');
	}

	public function teacher()
	{
		if(!isset($_SESSION['logged_in'])){
			redirect('','refresh');
		}

		$data = array(
			'dataHistory' => $this->Model_Admin->listHistoryTeacher()
		);
		
		$this->load->view('v_tentor', $data);
	}

	public function student()
	{
		if(!isset($_SESSION['logged_in'])){
			redirect('','refresh');
		}

		$data = array(
			'dataHistory' => $this->Model_Admin->listHistoryStudent()
		);
		$this->load->view('v_siswa', $data);
	}

	public function coba()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, JenisKelamin, NoTelp, AsalUniv, Status FROM tentor WHERE Status != 'Belum Diterima'");
		$result = $query->result();

		print_r($result);
	}

}

/* End of file Admin_Page.php */
/* Location: ./application/controllers/Admin_Page.php */