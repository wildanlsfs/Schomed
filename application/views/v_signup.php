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

	<title>Schomed Indonesia - Daftar</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="modal fade" id="myModal" role="dialog" style="text-align: center;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Daftar Tentor Tersedia Berdasarkan Mata Pelajaran</h5>
				</div>
				<div class="modal-body">
				<?php 
					if(empty($Mapel)){
						echo '<h5>Tidak Ada Tentor Yang Tersedia!</h5>';
					}
					foreach ($Mapel as $namaMapel => $val) {
						if($val->num_rows() != 0){
							echo '<h5>'.$namaMapel.'</h5><p style="font-size:100%;">';
							foreach ($Mapel[$namaMapel]->result() as $val2) {
								echo $val2->NamaLengkap.'<br>';
							}
							echo '</p>';
						}
					}
				?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal2" role="dialog" style="text-align: center;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Daftar Tentor Tersedia Berdasarkan Mata Pelajaran</h5>
				</div>
				<div class="modal-body">
				<?php 
					if(empty($Mapel)){
						echo '<h5>Tidak Ada Tentor Yang Tersedia!</h5>';
					}
					foreach ($Program as $namaProgram => $val) {
						if($val->num_rows() != 0){
							echo '<h5>'.$namaProgram.'</h5><p style="font-size:100%;">';
							foreach ($Program[$namaProgram]->result() as $val2) {
								echo $val2->NamaLengkap.'<br>';
							}
							echo '</p>';
						}
					}
				?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="authpage">
		<div class="authpage-inner well well-lg">
			<br>
			<h1>DAFTAR SEBAGAI</h1>
			<form id="form-validation" action="<?php echo base_url()?>signup_redirect" class="authpage-form" method="post">
				<i>Nota : Untuk sementara Schomed Indonesia hanya beroperasi di Makassar dan sekitarnya</i>
				<br>
				<i style="color: #F00;" id="error">
					<?php 
						if($error != ""){
							echo "<br>";
							echo $error;
							echo "<br>";
						}
					?>	
				</i>
				<br>
				<div class="radio-group">
					<input type="radio" value="siswa" id="option-one" name="selector" checked>
					<label class="custom-label" for="option-one">SISWA</label>
					<input type="radio" value="tentor" id="option-two" name="selector">
					<label class="custom-label" for="option-two">TENTOR</label>
				</div>
					<hr>
				<div class="form-group">
					<label for="email">Alamat Surat Elektronik</label>
					<input type="email" class="form-control" name="email" placeholder="Alamat Surat Elektronik" required title="Masukkan Alamat Surat Elektronik Yang Valid">
					<div id="errorEmail"></div>
				</div>
				<div class="form-group">
					<label for="pass">Kata Sandi</label>
					<input id="pass" type="password" class="form-control" name="pass" placeholder="Kata Sandi" required pattern=".{8,}" title="Kata Sandi Minimal 8 Karakter">
					<div id="errorPass"></div>
				</div>
				<div class="form-group">
					<label for="pass2">Konfirmasi Kata Sandi</label>
					<input id="pass2" type="password" class="form-control" name="pass2" placeholder="Konfirmasi Kata Sandi" required title="Masukkan Kata Sandi yang Sama">
					<div id="errorPass2"></div>
				</div>
				<div class="form-group" id="daftarTentor">
					<label for="pass2">Lihat Daftar Tentor Yang Tersedia Berdasarkan:</label>
					<div>
						<button type="button" class="authpage-button-medium" data-toggle="modal" data-target="#myModal">Mata Pelajaran</button>
						<button type="button" class="authpage-button-medium" data-toggle="modal" data-target="#myModal2">Program Pembelajaran</button>
					</div>
				</div>
				<div class="form-group" id="kebijakan">
					<input type="checkbox" name="cek" required>
					<label for="cek">Saya telah membaca <a href="<?php base_url()?>privacy_policy" style="color: #F00;">syarat dan ketentuan</a> yang berlaku </label>
				</div>
				<button type="submit" class="authpage-button">DAFTAR</button>
			</form>
			<br>
			<p>Telah memiliki akun? Masuk di <a href="signin" style="color: #F00;">sini!</a></p>
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
	$( "#form-validation" ).validate({
		rules: {
			pass2: {
		  		equalTo: "#pass"
			}
		},
		errorElement: 'i',
		errorContainer: {
			email: '#errorEmail',
			pass: '#errorPass',
			pass2: '#errorPass2'
		},
		errorClass: 'errormessage'
	});
	$(document).ready(function() {
		$("#kebijakan").show();
		$("#daftarTentor").show();
	    $('input[type=radio][name=selector]').change(function() {
	        if (this.value == 'tentor') {
	            $("#kebijakan").hide(100);
	            $("#daftarTentor").hide(100);
	        }
	        else{
	            $("#kebijakan").show(100);
	            $("#daftarTentor").show(100);
	        }
	    });
	});
    </script>
</body>
</html>

<!-- #038d3d -->