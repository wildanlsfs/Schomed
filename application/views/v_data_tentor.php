<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Kerja Praktik">
    <meta name="author" content="Hery Nugroho dan Wildan Lutfi">
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.png" type="image/x-icon"/>

	<title>Schomed Indonesia</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>

	<!-- Panel -->

	<div class="authpage">
		<div class="authpage-inner well well-lg">
			<br>
			<h1>Hello!</h1>
			<h3>Tolong Lengkapi Data Anda!</h3>
			<form class="authpage-form" id="form-fulldata" method="post" action="<?php echo base_url()?>achievement">
				<div class="form-group">
					<label for="fname">Nama Lengkap</label>
					<input type="text" class="form-control" name="fname" placeholder="Nama Lengkap" required pattern="[A-Za-z].{4,}" title="Nama Minimal 4 Karakter Alphabet">
					<div id="field"></div>
				</div>
				<div class="form-group">
					<label for="jeniskelamin">Jenis Kelamin</label>
					<select class="form-control" name="jeniskelamin" form="form-fulldata">
						<option value="lakilaki">Laki-Laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap (cth: Jl. Poros Tamalanrea, Perumahan BTP Blok L No. 1000 Samping Toko Anugrah))" required pattern=".{8,}" title="Masukkan Alamat Lengkap">
					<div id="field2"></div>
				</div>
				<div class="form-group">
					<label for="notelp">No Telepon</label>
					<input type="text" class="form-control" name="notelp" placeholder="No Telepon (cth:08**********)" required pattern="[0-9]{10,14}" title="Masukkan Minimal 10 Angka dan Maksimal 12 Angka">
					<div id="field3"></div>
				</div>
				<div class="form-group">
					<label for="lineID">ID Line</label>
					<input type="text" class="form-control" name="lineID" placeholder="ID LINE" required pattern=".{6,}" title="Masukkan Minimal 6 Karakter">
					<div id="field4"></div>
				</div>
				<div class="form-group">
					<label for="wa">Nomer WhatsApp</label>
					<input type="text" class="form-control" name="wa" placeholder="Nomer WhatsApp" required pattern="[0-9]{10,14}" title="Masukka Minimal 10 Angka dan Maksimal 12 Angka">
					<div id="field5"></div>
				</div>
				<div class="form-group">
					<label for="asaluniv">Asal Universitas</label>
					<input type="text" class="form-control" name="asaluniv" placeholder="Asal Universitas" required pattern=".{8,}" title="Masukkan Minimal 8 Karakter">
					<div id="field6"></div>
				</div>
				<div class="form-group">
					<label>Program Pembelajaran Yang Ingin Diajarkan</label>
					<br>
					<br>
					<div style="text-align: left; margin-left: 4%; color: black;">
						<input type="checkbox" name="program1" value="osnreguler">
						<label for="program1">Kelas OSN Reguler</label>
						<br>
						<input type="checkbox" name="program2" value="osnintensif">
						<label for="program2">Kelas OSN Intensif</label>
						<br>
						<input type="checkbox" name="program3" value="sbmptnreguler">
						<label for="program3">Kelas SBMPTN Reguler</label>
						<br>
						<input type="checkbox" name="program4" value="sbmptnintensif">
						<label for="sbmptnintensif">Kelas SBMPTN Intensif</label>
						<br>
						<input type="checkbox" name="program5" value="persiapanreguler" checked required>
						<label for="program5">Kelas Persiapan Reguler</label>
						<br>
						<input type="checkbox" name="program6" value="persiapanintensif" checked required>
						<label for="program6">Kelas Persiapan Intensif</label>
						<br>
						<input type="checkbox" name="program7" value="khususliburan">
						<label for="program7">Kelas Liburan</label>
						<br>
						<input type="checkbox" name="program8" value="khususramadhan">
						<label for="program8">Kelas Ramadhan</label>
						<br>
						<br>
					</div>
				</div>
				<div class="form-group">
					<label>Mata Pelajaran Yang Ingin Diajarkan</label>
					<br>
					<i>Minimal 1 Mata Pelajaran</i>
					<br>
					<br>
					<label for="mapel1">Mata Pelajaran Pertama</label>
					<select class="form-control" name="mapel1" form="form-fulldata" required>
						<option value="" disabled selected>-- Pilih --</option>
						<option value="matematika">Matematika</option>
						<option value="bindo">Bahasa Indonesia</option>
						<option value="binggi">Bahasa Inggris</option>
						<option value="biologi">Biologi</option>
						<option value="fisika">Fisika</option>
						<option value="kimia">Kimia</option>
						<option value="tpa">Tes Potensi Akademik</option>
						<option value="ipa">IPA Terpadu</option>
					</select>
					<br>
					<label for="mapel2">Mata Pelajaran Kedua</label>
					<select class="form-control" name="mapel2" form="form-fulldata" >
						<option value="" disabled selected>-- Pilih --</option>
						<option value="matematika">Matematika</option>
						<option value="bindo">Bahasa Indonesia</option>
						<option value="binggi">Bahasa Inggris</option>
						<option value="biologi">Biologi</option>
						<option value="fisika">Fisika</option>
						<option value="kimia">Kimia</option>
						<option value="tpa">Tes Potensi Akademik</option>
						<option value="ipa">IPA Terpadu</option>
					</select>
					<br>
					<label for="mapel3">Mata Pelajaran Ketiga</label>
					<select class="form-control" name="mapel3" form="form-fulldata" required>
						<option value="" disabled selected>-- Pilih --</option>
						<option value="matematika">Matematika</option>
						<option value="bindo">Bahasa Indonesia</option>
						<option value="binggi">Bahasa Inggris</option>
						<option value="biologi">Biologi</option>
						<option value="fisika">Fisika</option>
						<option value="kimia">Kimia</option>
						<option value="tpa">Tes Potensi Akademik</option>
						<option value="ipa">IPA Terpadu</option>
					</select>
				</div>
				<button type="submit" class="authpage-button">SELANJUTNYA</button>
			</form>
		</div>
	</div>

	<!-- Script -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
   	<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
   	<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
    <script>
	$( "#form-fulldata" ).validate({
		rules: {
		},
		errorElement: 'i',
		errorContainer: {
			fname: 'field',
			alamat: 'field2',
			notelp: 'field3',
			lineID: 'field4',
			wa: 'field5', 
			asaluniv:'field6'
		},
		errorClass: 'errormessage'
	});
	</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
</body>
</html>

<!-- #038d3d -->