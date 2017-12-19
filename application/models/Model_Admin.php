<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model {

	public function login($data)
	{
		$Username = "'".$data['Username']."'";
		$Pass = "'".$data['Pass']."'";
		 $query = $this->db->query("SELECT ID, Authority FROM admin WHERE Username = $Username AND Pass = $Pass LIMIT 1");

		 $row = $query->num_rows();
		 $query = $query->row();

		 if($row == 1){
		 	return $query;
		 }
		 else {
		 	return $query;
		 }
	}

	public function listRequest()
	{
		$data = array(
		'reqSiswa' 		=> $this->db->query("SELECT IDSiswa,NamaSiswa,MaksimalPembayaran,BuktiPembayaran FROM waiting_list WHERE Status=0"),
		'reqTentor' 	=> $this->db->query("SELECT ID,NamaLengkap,MaksimalKonfirmasi,BuktiPrestasi FROM tentor WHERE Status='Waiting'")
		);

		return $data;
	}

	public function acceptRequest()
	{
		
	}

	public function declineRequest()
	{
		
	}

	public function listSalary()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, Gaji FROM tentor");
		return $query;
	}

	public function listStudent()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, NoTelp, JenisKelamin, Status FROM siswa WHERE Status != 'Selesai'");
		return $query;
	}

	public function listTeacher()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, JenisKelamin, NoTelp, AsalUniv, Status FROM tentor WHERE Status != 'Belum Diterima'");
		return $query;
	}

	public function listAuthor()
	{
		$query = $this->db->query("SELECT * FROM admin WHERE Authority = 2");
		return $query;
	}

	public function listComments()
	{
		$query = $this->db->query("SELECT * FROM Komentar ORDER BY ID DESC LIMIT 50");
		return $query;
	}

	public function listHistoryTeacher()
	{
		$id = $_SESSION['ID']; 
		$query = $this->db->query("SELECT Mapel, Materi, Ringkasan, Dokumentasi FROM history WHERE IDTentor = $id");
		return $query->result();
	}

	public function listHistoryStudent()
	{
		$id = $_SESSION['ID']; 
		$query = $this->db->query("SELECT Mapel, Materi, Ringkasan, Dokumentasi FROM history WHERE IDSiswa = $id");
		return $query->result();
	}

	public function updateAll()
	{
		
	}

}

/* End of file Model_Admin.php */
/* Location: ./application/models/Model_Admin.php */