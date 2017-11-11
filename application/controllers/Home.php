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

	public function coba()
	{
		$this->load->model('Model_Siswa');

		$data = $this->Model_Siswa->getDataSiswa();
		foreach ($data as $siswa) {
			echo "Nama : ".$siswa['NamaLengkap']."<br/>";
			echo "Alamat : ".$siswa['Alamat']."<hr/>";
		}
	}

	public function query()
	{
		$data = array(
			'email' => ''
		);
		$this->db->select('ID');
		$this->db->from('auth_siswa');
		$this->db->where('email', $data['email']);
		$query = $this->db->get();

		$result = $query->result_array();

		echo $result[0];
	}
}