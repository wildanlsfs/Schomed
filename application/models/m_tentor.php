<?php 

	class BendaharaModel extends CI_Model
	{
		function rekap_kas_insert($data)
		{
			$query = $this->db->query("CALL rekap('".$data['pemasukkan']."', 
												  '".$data['pengeluaran']."',
												  '".$data['keterangan']."',
												  '".$data['tglwkt']."',
												  '".$data['idbendahara']."')
												  ");
			
			//foreach($query->result_array() AS $row) {
    		//	print_r($row['Saldo']);
    		//}
    		//print_r($query);
			return $query;
		}

		function view_saldo()
		{
			$query = $this->db->query("SELECT saldo FROM kas_rt WHERE IDKas = (SELECT MAX(IDKas) FROM kas_rt)");
			//print_r($query->result());
			return $query->result();
		}

 	}
?>

<?php 

	class LoginModel extends CI_Model
	{
		function login_ketuart($username, $password)
		{
			$query = $this->db->query("SELECT * FROM ketua_rt where Username = '".$username."' AND Password = '".$password."'  ");
			
			return $query->result();
		}

		function login_warga($username, $password)
		{
			$query = $this->db->query("SELECT * FROM user WHERE Username = '".$username."' AND Password = '".$password."' ");
			return $query->result();
		}

		function login_bendahara($username, $password)
		{
			$query = $this->db->query("SELECT * FROM bendahara WHERE Username = '".$username."' AND Password = '".$password."' ");
			return $query->result();
		}
 	}
?>