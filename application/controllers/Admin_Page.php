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
		$data = "'".$this->input->post("uname")."'";
		$query = $this->db->query("SELECT * FROM admin WHERE Username = $data LIMIT 1");
		if($query->num_rows() != 1){
			$data = array(
				"Username"		=> $this->input->post("uname"),
				"Pass"			=> md5($this->input->post("pass")),
				"Authority"		=> $this->input->post("authority"),
			);

			$this->db->insert('admin', $data);

			$newdata = array(
				"pesan" 	=> "Success"
			);
			$this->session->set_userdata($newdata);
		}
		else{
			$newdata = array(
				"pesan" 	=> "username has been used"
			);
			$this->session->set_userdata($newdata);
		}
		redirect('admin', 'refresh');
	}

	public function addHistory()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png|JPG|PNG';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('teacher','refresh');
		}
		else{
			$info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);

			$ID = $_SESSION['ID'];
			$query = $this->db->query("SELECT IDSiswa FROM jadwal WHERE IDTentor = $ID");
			$query = $query->row();
			$IDSiswa = $query->IDSiswa;

			$data = array(
				"IDSiswa"		=> $IDSiswa,
				"IDTentor"		=> $ID,
				"Mapel"			=> $this->input->post("mapel"),
				"Materi"		=> $this->input->post("materi"),
				"Ringkasan"		=> $this->input->post("ringkasan"),
				"Dokumentasi"	=> $image_path
			);

			$query2 = $this->db->query("UPDATE jadwal SET KuotaTerpakai = KuotaTerpakai + 1 WHERE IDTentor = $ID AND Status = 'Learning'");

			$this->db->insert('history', $data);

			redirect('teacher', 'refresh');
			
		}

	}

	public function teacher()
	{
		if(!isset($_SESSION['logged_in'])){
			redirect('','refresh');
		}
		$id = $_SESSION['ID'];

		$query = $this->db->query("SELECT Status FROM tentor WHERE ID = $id");
		$query = $query->row();

		$query2 = $this->db->query("SELECT a.NamaLengkap, a.NoTelp, a.IDLine, a.Tingkatan, a.BanyakSiswa, a.DurasiBelajar, a.BanyakPertemuan, a.ProgramBelajar, a.TipeKelas, b.Mapel FROM  siswa a, jadwal b WHERE a.id = (SELECT IDSiswa FROM jadwal WHERE IDTentor = $id AND Status = 'Learning' LIMIT 1) AND a.ID = b.IDSiswa AND b.IDTentor = $id");
		$query2 = $query2->row();
		$data = array(
			'dataHistory' 	=> $this->Model_Admin->listHistoryTeacher(),
			'dataStatus'	=> $query->Status,
			'dataInfo'		=> $query2
		);
		
		$this->load->view('v_tentor', $data);
	}

	public function finishTeaching()
	{
	    $data = $this->input->post('ID');
		$query = $this->db->query("UPDATE  tentor SET Status = 'Available' WHERE ID = $data");
		$query = $this->db->query("UPDATE  jadwal SET Status = 'Waiting For Confirmation' WHERE IDTentor = $data");
		$query = $this->db->query("UPDATE  waiting_list SET Status = 2 WHERE IDSiswa = (SELECT IDSiswa FROM jadwal WHERE IDTentor = $data LIMIT 1)");
	}

	public function checkStudentStatus()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("UPDATE  jadwal SET Status = 'Selesai' WHERE IDSiswa = $data AND Status = 'Waiting For Confirmation'");
		$status = $this->Model_Admin->updateStudentStatus($data);
		
		if($status  == "Selesai"){
			$query = $this->db->query("UPDATE  siswa SET Status = 'Selesai' WHERE ID = $data");
			$path = $this->db->query("SELECT BuktiPembayaran FROM waiting_list WHERE IDSiswa = $data");
			$path = $path->row();
			$path = $path->BuktiPembayaran;
			$arr = explode("/", $path);
			$filename = $arr[4].'/'.$arr[5];
			unlink($filename);
			
			$query = $this->db->query("DELETE FROM waiting_list WHERE IDSiswa = $data");
		}

	}

	public function vacation()
	{
	    $data = $_SESSION['ID'];
		$query = $this->db->query("UPDATE  tentor SET Status = 'Vacation' WHERE ID = $data");
	}

	public function endVacation()
	{
	    $data = $_SESSION['ID'];
		$query = $this->db->query("UPDATE  tentor SET Status = 'Available' WHERE ID = $data");
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

	public function changeSalary()
	{
		$ID = $this->input->post('ID');
		$gaji = $this->input->post('Gaji');
		$query = $this->db->query("UPDATE tentor SET Gaji = $gaji WHERE ID = $ID");
	}

	public function deleteAuthor()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("DELETE FROM admin WHERE ID = $data");
	}

	public function acceptTeacher()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("UPDATE  tentor SET Status = 'Available' WHERE ID = $data");
	}

	public function acceptStudent()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("UPDATE  siswa SET status = 'Learning' WHERE ID = $data");
		$query = $this->db->query("UPDATE  jadwal SET status = 'Learning' WHERE IDSiswa = $data");
		$query = $this->db->query("UPDATE  waiting_list SET status = 1 WHERE IDSiswa = $data");
		$query = $this->db->query("UPDATE tentor SET STATUS = 'Teaching' WHERE ID IN (SELECT IDTentor FROM jadwal WHERE IDSiswa = $data)");
	}

	public function declineTeacher()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("DELETE FROM tentor WHERE ID = $data");
		$query = $this->db->query("DELETE FROM mapel WHERE IDTentor = $data");
		$query = $this->db->query("DELETE FROM program WHERE IDTentor = $data");
	}

	public function declineStudent()
	{
		$data = $this->input->post('ID');
		$query = $this->db->query("DELETE FROM siswa  WHERE ID = $data");
		$query = $this->db->query("UPDATE tentor SET STATUS = 'Available' WHERE ID = (SELECT IDTentor FROM jadwal WHERE IDSiswa = $data LIMIT 1)");
		$query = $this->db->query("DELETE FROM jadwal  WHERE IDSiswa = $data");
		$query = $this->db->query("DELETE FROM waiting_list  WHERE IDSiswa = $data");
	}

	public function addQuota()
	{
		$data = $this->input->post('ID');
			
	}

	public function coba()
	{

	}

}

/* End of file Admin_Page.php */
/* Location: ./application/controllers/Admin_Page.php */