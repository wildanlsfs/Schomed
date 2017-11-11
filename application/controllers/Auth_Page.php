<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');

		$this->load->library('form_validation');

		$this->load->library('session');

		$this->load->model('Model_Login');

		$this->load->model('Model_Register');

		$this->load->model('Model_Siswa');

		$this->load->model('Model_Tentor');
	}

	public function index()
	{
		if(!isset($_SESSION)){
			session_start();
		}

		$data['error'] = "";
		$this->load->view('v_signin',$data);
	}

	public function signUp()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		
		$data['error'] = "";
		$this->load->view('v_signup',$data);
	}

	public function userRegistration()
	{
		$selector = $this->input->post('selector'); 
		
		$data = array(
			'Email' => $this->input->post('email'),
			'Pass' => md5($this->input->post('pass'))
			);

		$result = TRUE;

		if($selector == "siswa" ){
			$result = $this->Model_Register->registerSiswa($data);
		} else {
			$result = $this->Model_Register->registerTentor($data);
		}

		if($result == TRUE){
			$data['error'] = 'Anda berhasil mendaftar !';
			redirect(base_url().'signin','refresh');
			//$this->load->view('v_signin', $data);
		} 
		else {
			$data['error'] = 'Pendaftaran Gagal, Surel Telah Terpakai !';
			$this->load->view('v_signup', $data);	
		}
	}

	public function userLogin()
	{
		$selector = $this->input->post('selector');
		$data = array(
			'Email' => $this->input->post('Email'),
			'Pass' => md5($this->input->post('Pass'))
			);
		
		$result = TRUE;

		if($selector == "siswa" ){
			$result = $this->Model_Login->loginSiswa($data);
		} else {
			$result = $this->Model_Login->loginTentor($data);
		}

		if ($result == TRUE) {
			
			if($selector == 'siswa'){
				$id = $this->Model_Login->getIDSiswa($data);

				$result = $this->Model_Siswa->getData($id);

				$data1 = $this->Model_Siswa->checkData1($id);

				$data2 = $this->Model_Siswa->checkData2($id);

				if ($result != FALSE) {
					$session_data = array(
						'fullName' => $result[0]->NamaLengkap,
						'email' => $result[0]->Email,
						);
					
					$this->session->set_userdata('logged_in', $session_data);
					
					if ($data1 == FALSE){
						$data = array(
							'username' => $result[0]->NamaLengkap,
							'error' 	=> ''
						);
						$this->load->view('v_siswa', $data);

					} 
					else {
						if($data2 == FALSE){
							$data = array(
								'error' 	=> ' ' , 
								'username'	=> $result[0]->NamaLengkap,
								'bill' 		=> $result[0]->JumlahPembayaran
								);

							$this->load->view('v_verify_siswa', $data);
						}
						else {
							$this->load->view('v_home');
						}
					}

				}
			}
			else {
				$id = $this->Model_Login->getIDTentor($data);

				$result = $this->Model_Tentor->getData($id);
			}
			
			
		} 
		else {
			$data = array(
				'error' => 'Surel atau Password salah!');
			
			$this->load->view('v_login', $data);
		}
	}

	public function privacyPolicy()
	{
		$this->load->view('v_privacy_policy');
	}
}
