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
			<h1>Hello <?php echo $username?>!</h1>
			<h3>Tolong Unggah Bukti Prestasi Anda Disini!</h3>
			
			<i><?php echo $error;?></i>
			<br>
			<i>Unggah bukti prestasi anda dalam kurun waktu maksimal 7 hari, lalu upload bukti prestasi disini!</i>
			<br>
			<br>
			<?php echo form_open_multipart('upload/do_upload');?>
				<input type="file" name="userfile" id="userfile" class="inputfile" size="20" required />
				<label for="userfile" id="choose">PILIH BERKAS</label><br><br>
				<button type="submit" class="authpage-button">SELANJUTNYA</button>
			</form>
		</div>
	</div>

	<!-- Script -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
	<script>
		$(document).ready(function (){
			$('#userfile').change(function(e){
				var fileName = e.target.files[0].name;
				$('#choose').html("Anda Memilih " + fileName)
			});
		});
	</script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
</body>
</html>

<!-- #038d3d -->