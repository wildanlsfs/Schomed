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

	<title>Schomed Indonesia - Waiting For Confirmation</title>

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
			<h1>Hello <?php 
				if(isset($_SESSION['username'])){	
					echo $_SESSION['username'];
				}?>!</h1>
			<br>
			<h3>Data Anda Sedang Dikonfirmasi, Pemberitahuan Selanjutnya Melalui Email</h3>
			<br>
			<i>Jika tidak mendapatkan email, harap hubungi 0896-2956-8164</i>
			<br>
			<a href="<?php echo base_url();?>" style="color: #fff;"><button class="authpage-button">Home</button></a>
		</div>
	</div>

	<!-- Script -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
</body>
</html>

<!-- #038d3d -->