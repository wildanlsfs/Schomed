<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->driver('session');
        $this->load->model('Model_Register');
        $this->load->model('Model_Siswa');
        $this->load->model('Model_Tentor');
        $this->load->model('Model_Jadwal');
        if(!isset($_SESSION['logged_in'])){
        	redirect(base_url().'signin','refresh');
        }
	}

	public function index()
	{
		
	}

	public function fillDataSiswa1(){
		$this->load->view('v_data_siswa');
	}

	public function verifySiswa(){

		$report = array();

		$dbsiswa = array(
			'NamaLengkap' 		=> $this->input->post('fname'),
			'JenisKelamin' 		=> $this->input->post('jeniskelamin'),
			'Alamat' 			=> $this->input->post('alamat'),
			'NoTelp' 			=> $this->input->post('notelp'),
			'IDLine' 			=> $this->input->post('lineID'),
			'AsalSekolah' 		=> $this->input->post('asalsekolah'),
			'Tingkatan' 		=> $this->input->post('tingkatan'),
			'BanyakSiswa' 		=> $this->input->post('banyaksiswa'),
			'DurasiBelajar' 	=> $this->input->post('durasibelajar'),
			'BanyakPertemuan' 	=> $this->input->post('banyakpertemuan'),
			'JumlahPembayaran' 	=> $this->input->post('jumlahpembayaran'),
			'ProgramBelajar' 	=> $this->input->post('program'),
			'TipeKelas' 		=> $this->input->post('classtype')
		);

		$dbwaitinglist = array(
			'NamaSiswa'		=> $this->input->post('fname')
		);	

		if($this->Model_Siswa->fillData1($dbsiswa)){
			$report['fillData'] = TRUE;
		}
		else {
			$report['fillData'] = FALSE;
		}
		
		if($this->Model_Siswa->addToWaitingList($dbwaitinglist)){
			$report['addToWaitingList'] = TRUE;
		}
		else {
			$report['addToWaitingList'] = FALSE;
		}

		if($this->input->post('banyakMapel') == 1){
			$dbmapel1 = array(
				'IDSiswa'		=> $_SESSION['ID'],
				'IDTentor'		=> $this->input->post('tentor1'),
				'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
				'Tingkatan' 	=> $this->input->post('tingkatan'),
				'Mapel' 		=> $this->input->post('mapel1'),
				'Kuota' 		=> $this->input->post('kuota1'),
				'Program' 		=> $this->input->post('program'),
				'TipeKelas' 	=> $this->input->post('classtype')

			);
			if($this->Model_Siswa->addCourse($dbmapel1)){
				$report['addCourse'] = TRUE;
			}
			else {
				$report['addCourse'] = FALSE;	
			}
		}
		else if($this->input->post('banyakMapel') == 2){
			$dbmapel1 = array(
				'IDSiswa'		=> $_SESSION['ID'],
				'IDTentor'		=> $this->input->post('tentor1'),
				'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
				'Tingkatan' 	=> $this->input->post('tingkatan'),
				'Mapel' 		=> $this->input->post('mapel1'),
				'Kuota' 		=> $this->input->post('kuota1'),
				'Program' 		=> $this->input->post('program'),
				'TipeKelas' 	=> $this->input->post('classtype')

			);
			if($this->Model_Siswa->addCourse($dbmapel1)){
					$report['addCourse'] = TRUE;
				}
				else {
					$report['addCourse'] = FALSE;	
				}
			if($this->input->post('kuota2') != 0){
				$dbmapel2 = array(
					'IDSiswa'		=> $_SESSION['ID'],
					'IDTentor'		=> $this->input->post('tentor2'),
					'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
					'Tingkatan' 	=> $this->input->post('tingkatan'),
					'Mapel' 		=> $this->input->post('mapel2'),
					'Kuota' 		=> $this->input->post('kuota2'),
					'Program' 		=> $this->input->post('program'),
					'TipeKelas' 	=> $this->input->post('classtype')

				);
				if($this->Model_Siswa->addCourse($dbmapel2)){
					$report['addCourse'] = TRUE;
				}
				else {
					$report['addCourse'] = FALSE;	
				}
			}
		}
		else if($this->input->post('banyakMapel') == 3){
			$dbmapel1 = array(
				'IDSiswa'		=> $_SESSION['ID'],
				'IDTentor'		=> $this->input->post('tentor1'),
				'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
				'Tingkatan' 	=> $this->input->post('tingkatan'),
				'Mapel' 		=> $this->input->post('mapel1'),
				'Kuota' 		=> $this->input->post('kuota1'),
				'Program' 		=> $this->input->post('program'),
				'TipeKelas' 	=> $this->input->post('classtype')

			);
			if($this->Model_Siswa->addCourse($dbmapel1)){
				$report['addCourse'] = TRUE;
			}
			else {
				$report['addCourse'] = FALSE;	
			}
			if($this->input->post('kuota2') != 0){
				$dbmapel2 = array(
					'IDSiswa'		=> $_SESSION['ID'],
					'IDTentor'		=> $this->input->post('tentor2'),
					'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
					'Tingkatan' 	=> $this->input->post('tingkatan'),
					'Mapel' 		=> $this->input->post('mapel2'),
					'Kuota' 		=> $this->input->post('kuota2'),
					'Program' 		=> $this->input->post('program'),
					'TipeKelas' 	=> $this->input->post('classtype')

				);
				if($this->Model_Siswa->addCourse($dbmapel2)){
					$report['addCourse'] = TRUE;
				}
				else {
					$report['addCourse'] = FALSE;	
				}
				if($this->input->post('kuota3') != 0){
					$dbmapel3 = array(
						'IDSiswa'		=> $_SESSION['ID'],
						'IDTentor'		=> $this->input->post('tentor3'),
						'BanyakSiswa' 	=> $this->input->post('banyaksiswa'),
						'Tingkatan' 	=> $this->input->post('tingkatan'),
						'Mapel' 		=> $this->input->post('mapel3'),
						'Kuota' 		=> $this->input->post('kuota3'),
						'Program' 		=> $this->input->post('program'),
						'TipeKelas' 	=> $this->input->post('classtype')

					);
					if($this->Model_Siswa->addCourse($dbmapel3)){
						$report['addCourse'] = TRUE;
					}
					else {
						$report['addCourse'] = FALSE;	
					}
				}
			}
			
		}

		if($report['addCourse'] && $report['addToWaitingList'] && $report['fillData']){
			$data['bill'] = $this->input->post('jumlahpembayaran');
			$this->load->view('v_verify_siswa',$data);	
		}
		else {
			redirect(base_url().'fill_student_data','refresh');
		}
	}

	public function fillDataTentor1(){
		$this->load->view('v_data_tentor');
	}

	public function verifyTentor(){
		$report = array();

		$dbtentor = array(
			'NamaLengkap' 		=> $this->input->post('fname'),
			'JenisKelamin' 		=> $this->input->post('jeniskelamin'),
			'Alamat' 			=> $this->input->post('alamat'),
			'NoTelp' 			=> $this->input->post('notelp'),
			'IDLine' 			=> $this->input->post('lineID'),
			'NomerWhatsApp' 	=> $this->input->post('wa'),
			'AsalUniv' 			=> $this->input->post('asaluniv')
		);

		if($this->Model_Tentor->fillData1($dbtentor)){
			$report['fillData'] = TRUE;
		}
		else {
			$report['fillData'] = FALSE;
		}

		if($this->input->post('program1') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program1'))){
				$report['addProgram1'] = TRUE;
			}
			else {
				$report['addProgram1'] = FALSE;
			}
		}

		if($this->input->post('program2') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program2'))){
				$report['addProgram2'] = TRUE;
			}
			else {
				$report['addProgram2'] = FALSE;
			}
		}

		if($this->input->post('program3') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program3'))){
				$report['addProgram3'] = TRUE;
			}
			else {
				$report['addProgram3'] = FALSE;
			}
		}

		if($this->input->post('program4') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program4'))){
				$report['addProgram4'] = TRUE;
			}
			else {
				$report['addProgram4'] = FALSE;
			}
		}

		if($this->input->post('program5') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program5'))){
				$report['addProgram5'] = TRUE;
			}
			else {
				$report['addProgram5'] = FALSE;
			}
		}

		if($this->input->post('program6') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program6'))){
				$report['addProgram6'] = TRUE;
			}
			else {
				$report['addProgram6'] = FALSE;
			}
		}

		if($this->input->post('program7') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program7'))){
				$report['addProgram7'] = TRUE;
			}
			else {
				$report['addProgram7'] = FALSE;
			}
		}

		if($this->input->post('program8') != NULL){
			if($this->Model_Tentor->addProgram($this->input->post('program8'))){
				$report['addProgram8'] = TRUE;
			}
			else {
				$report['addProgram8'] = FALSE;
			}
		}

		if($this->input->post('mapel1') != NULL){
			if($this->Model_Tentor->addCourse($this->input->post('mapel1'))){
				$report['addMapel1'] = TRUE;
			}
			else {
				$report['addMapel1'] = FALSE;
			}
		}

		if($this->input->post('mapel2') != NULL){
			if($this->Model_Tentor->addCourse($this->input->post('mapel2'))){
				$report['addMapel2'] = TRUE;
			}
			else {
				$report['addMapel2'] = FALSE;
			}
		}

		if($this->input->post('mapel3') != NULL){
			if($this->Model_Tentor->addCourse($this->input->post('mapel3'))){
				$report['addMapel3'] = TRUE;
			}
			else {
				$report['addMapel3'] = FALSE;
			}
		}

		if($report['fillData'] == TRUE && $report['addMapel1'] == TRUE){
			$this->load->view('v_verify_tentor');
		} else {
			
			redirect(base_url().'fill_teacher_data','refresh');
		}
	}

	public function uploadBill()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|JPG|PNG';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$this->load->view('v_verify_siswa');
		}
		else{
			$info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$data['BuktiPembayaran'] = $image_path;
			if($this->Model_Siswa->fillData2($data)){
				redirect(base_url().'waiting_for_confirmation','refresh');
			} else {
				$this->session->set_flashdata('error', "Upload Gagal");
				$this->load->view('v_verify_siswa');
			}
		}
	}

	public function uploadAchievement()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|JPG|PNG';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$this->load->view('v_verify_tentor');
		}
		else{
			$info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$data['BuktiPrestasi'] = $image_path;
			if($this->Model_Tentor->fillData2($data)){
				session_destroy();
				redirect(base_url().'waiting_for_confirmation','refresh');
			} else {
				$this->session->set_flashdata('error', "Upload Gagal");
				$this->load->view('v_verify_tentor');
			}
		}
	}

	public function waiting_for_confirmation(){
		$this->load->view('v_waiting_for_admin');
	}

	public function getAvailableTutorList1()
	{
		$mapel = $this->input->post('mapel1');
		$program = $this->input->post('program').$this->input->post('classtype');
		$data = $this->Model_Tentor->getTutor($mapel,$program);
		echo json_encode($data);
	}

	public function getAvailableTutorList2()
	{
		$mapel = $this->input->post('mapel2');
		$program = $this->input->post('program').$this->input->post('classtype');
		$data = $this->Model_Tentor->getTutor($mapel,$program);
		echo json_encode($data);
	}

	public function getAvailableTutorList3()
	{
		$mapel = $this->input->post('mapel3');
		$program = $this->input->post('program').$this->input->post('classtype');
		$data = $this->Model_Tentor->getTutor($mapel,$program);
		echo json_encode($data);
	}

	public function cek($mapel,$program)
	{
		$data = $this->Model_Tentor->getTutor($mapel,$program);
		echo json_encode($data);
	}

}
