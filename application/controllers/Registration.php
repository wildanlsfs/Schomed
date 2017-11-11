<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->driver('session');
	}

	public function index()
	{
		
	}

	public function fillDataSiswa1(){
		$data = array(
			'username'	=> '',
			'error' 	=> ''
		);
		$this->load->view('v_data_siswa_1', $data);
	}

	public function fillDataSiswa2(){
		$data = array(
			'username'	=> '',
			'error' 	=> ''
		);
		$this->load->view('v_tambah_mapel',$data);
	}

	public function verifySiswa(){
		$data = array(
			'error' 	=> ' ' , 
			'username'	=> $this->input->post('fname'),
			'bill' 		=> $this->input->post('jumlahpembayaran')
			);

		$this->load->view('v_verify_siswa', $data);
	}

	
	public function fillDataTentor1(){
		$data = array(
			'username'	=> '',
			'error' 	=> ''
		);
		$this->load->view('v_data_tentor_1', $data);
	}


	public function verifyTentor(){
		$data = array(
			'error' 	=> ' ' , 
			'username'	=> $this->input->post('fname')
		);

		$this->load->view('v_verify_tentor', $data);
	}

	public function waiting_for_confirmation(){
		$data = array(
			'username'	=> 'wildan',
			'error' 	=> ''
		);
		$this->load->view('v_waiting_for_admin',$data);
	}

}
