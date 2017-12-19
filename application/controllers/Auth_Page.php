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

		if($result == 1){
			$this->session->set_flashdata('success', 'Anda berhasil mendaftar !');
			redirect(base_url().'signin','refresh');
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
			'Email' => $this->input->post('email'),
			'Pass' => md5($this->input->post('pass'))
			);
		
		$result = TRUE;

		if($selector == "siswa" ){
			$result = $this->Model_Login->loginSiswa($data);
		} else {
			$result = $this->Model_Login->loginTentor($data);
		}
		if ($result == -1) {
			$this->session->set_flashdata('error', 'Surel atau password salah!');
			redirect(base_url().'signin','refresh');
		} 
		else {

			//Berhasil Login
			$id = $result;

			if($selector == "siswa" ){
				$result = $this->Model_Siswa->checkData1($id);

				$newdata = array(
					'ID' 			=> $id,
			        'logged_in'  	=> TRUE,
			        'username' 		=> $data['Email']
				);

				$this->session->set_userdata($newdata);
				//memeriksa pengisian data diri
				if ($result == 1) {
					
					$dataSiswa = $this->Model_Siswa->getData($id);

					$result = $this->Model_Siswa->checkData2($id);
					//memeriksa pembayaran
					if ($result == 1) {
						
						$result = $this->Model_Siswa->checkData3($id);

						//memeriksa status
						if($result == "Belum Bayar"){
							redirect(base_url().'waiting_for_confirmation','refresh');
						}
						else {
							redirect('student','refresh');
						}
						
					}
					else {
						$newdata = array(
						        'username'  => $dataSiswa->NamaLengkap,
						        'bill'		=> $dataSiswa->JumlahPembayaran
						);

						$this->session->set_userdata($newdata);
						redirect(base_url().'bill','refresh');
					}
				}
				else {
					redirect(base_url().'fill_student_data','refresh');
				}
			} else {
				$result = $this->Model_Tentor->checkData1($id);
				$newdata = array(
					'ID' 		=> $id,
			        'logged_in'  => TRUE,
			        'username' 		=> $data['Email']
				);

				$this->session->set_userdata($newdata);
				//memeriksa pengisian data diri
				if ($result == 1) {
					
					$dataTentor = $this->Model_Tentor->getData($id);

					$result = $this->Model_Tentor->checkData2($id);
					
					//memeriksa pembayaran
					if ($result == 1) {
						
						$result = $this->Model_Tentor->checkData3($id);

						//memeriksa status
						if($result == "Belum Diterima"){
							redirect(base_url().'waiting_for_confirmation','refresh');
						}
						else {
							//Menampilkan UI Tentor
							redirect('teacher','refresh');
						}
						
					}
					else {
						$newdata = array(
						        'username'  => $dataTentor->NamaLengkap
						);

						$this->session->set_userdata($newdata);
						redirect(base_url().'achievement','refresh');
					}
				}
				else {
					redirect(base_url().'fill_teacher_data','refresh');
				}
			}
		}
	}

	public function privacyPolicy()
	{
		$this->load->view('v_privacy_policy');
	}

	public function BillingStatement($data)
	{
		$this->load->helper('v_billing.php', $data);
	}
}
