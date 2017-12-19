<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->driver('session');
    }

	public function index()
	{
		if(isset($_SESSION['logged_in'])){
			unset($_SESSION['logged_in']);
			unset($_SESSION['ID']);
			unset($_SESSION['username']);
		}
		$this->load->view('v_home');
	}

	public function signin_redirect(){
		$selector = $this->input->post('selector'); 
		if($selector == "siswa" ){
			redirect('fill_student_data_2', 'refresh');
		} else {
			redirect('fill_teacher_data_2', 'refresh');
		}
	}
	
	public function signup_redirect(){
		if($this->input->post('selector') == "siswa" ){
			redirect('fill_student_data_1', 'refresh');
		} else {
			redirect('fill_teacher_data_1', 'refresh');
		}
	}

	public function contact_us(){
		$date = new DateTime();
		$date = $date->format('Y-m-d H:i:s');

		$data = array(
			"NamaLengkap"	=> $this->input->post("firstName")." ".$this->input->post("lastName"),
			"Email"			=> $this->input->post("email"),
			"Komentar"		=> $this->input->post("comment"),
			"Tanggal"		=> $date
		);

		$this->db->insert('komentar', $data);

		redirect('Home', 'refresh');

	}
}