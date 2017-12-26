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
		'reqSiswa' 		=> $this->db->query("SELECT a.*, b.Email, b.JumlahPembayaran FROM waiting_list a, siswa b WHERE a.Status=0 AND b.status= 'belum bayar'"),
		'reqTentor' 	=> $this->db->query("SELECT a.*, b.Mapel FROM tentor a, mapel b WHERE Status='Belum Diterima' AND a.ID = b.IDTentor")
		);

		return $data;
	}

	public function listSalary()
	{
		$query = $this->db->query("SELECT ID, NamaLengkap, Gaji FROM tentor WHERE status != 'Belum Diterima'");
		return $query;
	}

	public function listStudent()
	{
		$query = $this->db->query("SELECT a.Mapel, a.KuotaTerpakai, a.Kuota, a.Status, b.ID, b.NamaLengkap, b.JenisKelamin, b.NoTelp, b.IDLine FROM jadwal a, siswa b WHERE a.Status != 'Selesai' AND a.Status != 'Belum Bayar' AND a.IDSiswa = b.ID");
		return $query;
	}

	public function listTeacher()
	{
		$query = $this->db->query("SELECT a.*, b.Mapel FROM tentor a, mapel b WHERE Status != 'Belum Diterima' AND a.ID = b.IDTentor");
		return $query;
	}

	public function listTeacherByMapel()
	{
		$mapel = array(
			"Matematika" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'matematika'"),
			"Bahasa Indonesia" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'bindo'"),
			"Bahasa Inggris" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'binggi'"),
			"Biologi" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'biologi'"),
			"Fisika" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'fisika'"),
			"Kimia" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'kimia'"),
			"Tes Potensi Akademik" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'tpa'"),
			"IPA Terpadu" 	=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, mapel b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Mapel = 'ipa'")
		);

		return $mapel;
	}

	public function listTeacherByProgram()
	{
		$program = array(
			"OSN Reguler"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'osnreguler'"),
			"OSN Intensif"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'osnintensif'"),
			"SBMPTN Reguler"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'sbmptnreguler'"),
			"SBMPTN Intensif"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'sbmptnintensif'"),
			"Persiapan Reguler"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'persiapanreguler'"),
			"Persiapan Intensif"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'persiapanintensif'"),
			"Liburan"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'khususliburan'"),
			"Ramadhan"		=> $this->db->query("SELECT a.NamaLengkap FROM tentor a, program b WHERE b.IDTentor = a.ID AND a.Status = 'Available' AND b.Program = 'khususramadhan'")
		);

		return $program;
	}

	public function listAuthor()
	{
		$query = $this->db->query("SELECT * FROM admin WHERE Authority = 2");
		return $query;
	}

	public function listComments()
	{
		$query = $this->db->query("SELECT * FROM komentar ORDER BY ID DESC LIMIT 50");
		return $query;
	}

	public function listHistoryTeacher()
	{
		$id = $_SESSION['ID']; 
		$query = $this->db->query("SELECT Mapel, Materi, Ringkasan, Dokumentasi FROM history WHERE IDTentor = $id AND IDSiswa = (SELECT IDSiswa FROM history WHERE IDTentor = $id LIMIT 1)");
		return $query->result();
	}

	public function listHistoryStudent()
	{
		$id = $_SESSION['ID']; 
		$query = $this->db->query("SELECT Mapel, Materi, Ringkasan, Dokumentasi FROM history WHERE IDSiswa = $id");
		return $query->result();
	}

	public function updateStudentStatus($data)
	{
		$query = $this->db->query("SELECT Status FROM jadwal WHERE IDSiswa = '$data'"); 
		$query = $query->result();
		foreach ($query as $val) {
			if($val->Status != "Selesai"){
				return "Learning";
			}
		}

		return "Selesai";
	}

}

/* End of file Model_Admin.php */
/* Location: ./application/models/Model_Admin.php */