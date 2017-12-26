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

	<title>Schomed Indonesia - Beranda</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="<?php echo base_url();?>assets/img/logo-schomed.png" >
                </a>
            </div>
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	            <ul class="nav navbar-nav">
	                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                <li class="hidden">
	                    <a href="#page-top"></a>
	                </li>
	                <li>
	                    <a class="page-scroll" href="#home">BERANDA</a>
	                </li>
	                <li>
	                    <a class="page-scroll" href="#about">TENTANG</a>
	                </li>
	                <li>
	                    <a class="page-scroll" href="#services">SERVIS</a>
	                </li>
	                <li>
	                    <a class="page-scroll" href="#contacts">KONTAK</a>
	                </li>
	            </ul>
	        </div>
		</div>
	</nav>

	<!-- Header -->
	<header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    	<div class="slider-size">
						    <img src="<?php echo base_url("assets/img/logo-schomed_1_orig.png");?>" style="width: 100%;">
						</div>
                        <p class="intro-text">Pendidikan Alternatif Terbaru di Kawasan Indonesia Timur<br>
​							Berkomitmen Menjadi Lembaga Les Privat Terbesar di Indonesia Timur</p>  <br>
                    </div>

                    <div class="col-md-6 ">
                    	<h3><a href="signin">MASUK</a></h3>
                    </div>
                    <div class="col-md-6 ">
                    	<h3><a href="signup">DAFTAR</a></h3>
                    </div>
                </div>
                <!-- <div class="row">
                	<div class="col-md-12 ">
                    	<h3><a href="article">BACA ARTIKEL</a></h3>
                    </div>
                </div> -->
            </div>
        </div>
    </header>

    <!-- Section -->
    <hr>
	<!-- Home Section -->
    <section id="home" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
            	<br><br><br>
            	<iframe width="1024" height="606" src="https://www.youtube.com/embed/9gryBeoqrRg" frameborder="0" allowfullscreen style=" width: 100%; "></iframe>

            	<br><br><br>
				
				<div id="Carousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" style="height: 100%;">
						<div class="item active">
							<img src="<?php echo base_url("/assets/img/11_orig.png")?>" alt="Schomed info" style="width: 100%;">
						</div>
						<div class="item">
							<img src="<?php echo base_url("/assets/img/schomed-iklan-copy-copy_orig.jpg")?>" alt="Schomed Ads" style="width: 100%;">
						</div>
						<div class="item">
							<img src="<?php echo base_url("/assets/img/tes_orig.jpg")?>" alt="Schomed Slogan" style="width: 100%;">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#Carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#Carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<br><br><br>

				<div class="container-fluid">
					<h2>​​<b>Ragam Program Schomed Indonesia</b></h2>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program1.jpg")?>" alt="Online Class" style="width: 100%;">
					</div>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program2.jpg")?>" alt="Homework Consultancy" style="width: 100%;">
					</div>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program3.jpg")?>" alt="Promo Class" style="width: 100%;">
					</div>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program4.jpg")?>" alt="Home Private" style="width: 100%;">
					</div>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program5.jpg")?>" alt="Open Recruitment Tenaga Tutor" style="width: 100%;">
					</div>
					<div class="col-lg-4">
						<img src="<?php echo base_url("/assets/img/program6.jpg")?>" alt="Kelas Ramadhan" style="width: 100%;">
					</div>					
				</div>

				<br><br><br>

            </div>
        </div>
    </section>

    <hr>
    
    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
           		<br><br><br>
                <h2>​​<b>Sekilas Tentang Schomed Indonesia ....</b></h2>
                <div style="text-align: justify;">
                	<p>School of Medicos atau yang kini lebih dikenal dengan sebutan ‘Schomed Indonesia’ adalah sebuah lembaga layanan les privat yang seluruh tutornya berasal dari mahasiswa Fakultas Kedokteran dan Kedokteran Gigi yang berprestasi di bidangnya masing – masing.<br><br>
					Schomed didirikan oleh Awal Safar M, seorang mahasiswa yang berkuliah di Fakultas Kedokteran Universitas Hasanuddin pada tanggal 1 Juli 2013.<br><br>
					Schomed ada atas keprihatinan sosok ini terhadap banyaknya mahasiswa Fakultas Kedokteran yang dulunya banyak meraih prestasi, namun sejak duduk di bangku kuliah mereka tidak bisa lagi berbagi ilmu yang mereka miliki dan hanya menjadi kenangan prestasi di masa lalu.<br><br>
					Di sisi lain, pelajar Indonesia saat ini sangat membutuhkan motivasi – motivasi agar tetap bisa menjaga semangat mereka untuk terus berprestasi seperti orang – orang yang lebih dulu sukses.<br><br>
					Schomed hadir membawa angin segar di dunia pendidikan dengan hadir sebagai jembatan untuk mempertemukan mahasiswa Fakultas Kedokteran yang telah banyak meraih prestasi baik prestasi akademik maupun non-akademik dengan pelajar di seluruh pelosok Indonesia.</p><br><br>

					<p><b>Apa yang Kami Lakukan?</b><br>
					<br> - Menghimpun seluruh mahasiswa Fakultas Kedokteran yang pernah meraih prestasi baik saat duduk di bangku sekolah maupun perkuliahan sebagai ‘tutor’.
					<br> - Mengelolah pendaftaran pelajar yang ingin mengikuti kelas dengan menggunakan platform yang ada.
					<br> - Mempertemukan tutor dengan pelajar pada sebuah kelas baik secara online maupun offline.
					<br> - Mengadakan pelbagai kegiatan sosial baik secara independen maupun melalui kerjasama dengan komunitas dan organisasi lainnya.
					<br> - Menyisihkan 2,5% dari profit untuk disalurkan sebagai beasiswa pendidikan bertajuk ‘Beasiswa Schomed for Indonesian Children’ atau disingkat ‘BeaSIC’</p><br><br>
					<p><b>Tiga Schomed Pilars</b><br>
					<br>1.Capacity Building. Schomed hadir sebagai wadah untuk mengembangkan kapasitas pemuda baik itu mahasiswa Kedokteran sebagai ‘tutor’ maupun kalangan lainnya yang akan bekerja sebagai staf.<br>
					<br>2.Community Service. Salah satu cita – cita luhur Schomed adalah pengabdian masyarakat. Schomed akan secara konsisten memberikan kontribusi secara nyata terhadap dunia pendidikan di Indonesia melalui proyek sosial baik secara independen maupun melalui mekanisme kerjasama.<br>
					<br>3.Economic Development. Wirausaha adalah salah satu upaya untuk membangun perekonomian bangsa demi pergerakan menuju bangsa yang maju. Schomed hadir dan sejajar dengan lembaga swasta lainnya untuk memberikan kontribusi terhadap dunia perekonomian.<br></p>

					<blockquote>"Peraih Penghargaan Wirausaha Muda Pemula Berprestasi Provinsi Sulawesi Selatan  2015 oleh Kemenpora dan Gubernur Sulawesi Selatan"</blockquote><br>

					<div class="text-center">
						<img src="<?php echo base_url("/assets/img/12122683-544819129001484-8152024503038659951-n_1.jpeg")?>" alt="Kelas Ramadhan" style="width:60%;">
						<p class="text-center" style="color: #ccc;">Awal Safar M, Founder dan CEO Schomed Indonesia</p>
					</div><br>
                </div>
                <div style="text-align: justify;">
					<h3 style="color: #038d3d;"><b>Sambutan Founder dan CEO ...</b></h3>

					<p>School of Medicos adalah sebuah revolusi bagi mahasiswa kedokteran dan kedokteran gigi di seluruh Indonesia. School of Medicos yang kami singkat dengan sebutan ‘Schomed’ telah hadir dan memberikan banyak kesempatan bagi seluruh pemuda, khususnya mahasiswa fakultas kedokteran yang memiliki prestasi, untuk berbagi ilmu.<br><br>

					Cita – cita luhur dari didirikannya lembaga ini adalah sebagai wadah berbagi ilmu, sebagai wadah pengabdian terhadap dunia pendidikan, dan sekaligus sebagai wadah untuk mengangkat perekonomian bangsa dengan menitikberatkan pada pengembangan kapasitas pemuda sesuai dengan passion.<br><br>

					Dari tahun ke tahun, Schomed semakin berkembang dengan meningkatnya jumlah pemuda yang bergabung di dalamnya, baik sebagai pengajar maupun sebagai staf.<br><br>

					Jangkauan Schomed pun semakin luas dengan diterapkannya sistem belajar offline maupun online sehingga dampak dari adanya Schomed semakin dirasakan oleh seluruh pelajar di Indonesia.<br><br>
					​
					“Sekarang saatnya berbuat untuk negeri melalui passion, <i>Keep Follow Your Passion !</i>”<br></p>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Services Section -->
    <section id="services" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
           		<br><br><br>
           		<img src="<?php echo base_url("/assets/img/1939671-410857639064301-6405448966454568337-n_1.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;"><br><br><br>
           		<img src="<?php echo base_url("/assets/img/1-siswa_orig.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;"><hr>
           		<img src="<?php echo base_url("/assets/img/2-siswa_orig.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;"><hr>
           		<img src="<?php echo base_url("/assets/img/3-siswa_orig.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;"><hr>
           		<img src="<?php echo base_url("/assets/img/4-siswa_orig.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;"><hr>
           		<img src="<?php echo base_url("/assets/img/5-siswa_orig.png")?>" alt="Cara Menjadi Murid Kami" style="width:100%;">
           		<p style="color: rgb(220,220,0);"><br>Keterangan: biaya yang tertera di atas adalah biaya yang harus dibayar oleh tiap siswa <b>(BUKAN BERKELOMPOK)</b></p>
           		<!-- <hr>
           		<h2><b>Metode Pembayaran</b></h2>
           		<br><br>
           		<h4><b>Transfer BANK</b></h4>
           		<p>Transfer Melalui bank yang tersedia. Jangan lupa konfirmasi setelah pembayaran dikirimkan.</p>
           		<div class="galery-big">
	       			<img class="galery-big-item" src="<?php echo base_url("/assets/img/bni.jpg")?>" alt="BNI">
	       			<img class="galery-big-item" src="<?php echo base_url("/assets/img/bri.jpg")?>" alt="BRI">
	       			<img class="galery-big-item" src="<?php echo base_url("/assets/img/mandiri_2.jpg")?>" alt="MANDIRI">
	       			<p><br>Kirimkan foto resi pembayaran Anda ke email <i style="color: rgb(220,220,0);">schomedindonesia@gmail.com</i>. Terima kasih!</p>
           		</div> -->
           	</div>
		</div>
	</section>

    <hr>

    <!-- Contacts Section -->
    <section id="contacts" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
           		<br><br><br>
                <h2><b>Hubungi kami di:</b></h2>
                <br>
                <ul class="list-inline banner-social-buttons">
                    <li style="margin: 4px 0px;">
                        <a href="https://www.facebook.com/schomed" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li style="margin: 4px 0px;">
                        <a href="https://www.instagram.com/schomed.id/" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                    </li>
                    <li style="margin: 4px 0px;">
                        <a href="https://www.youtube.com/channel/UCMmY0I8oJMH8VX0GpXQm9TQ" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i> <span class="network-name"></span>YouTube Channel</a>
                    </li>
                    <li style="margin: 4px 0px;">
                        <a href="https://twitter.com/schoolofmedicos" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name"></span>Twitter</a>
                    </li>
                    <li style="margin: 4px 0px;">
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-phone fa-fw"></i> <span class="network-name">089-7525-2575</span></a>
                    </li>
                    <li style="margin: 4px 0px;">
                        <a href="mailto:schomedindonesia@gmail.com" class="btn btn-default btn-lg"><i class="fa fa-paper-plane fa-fw"></i> <span class="network-name"></span>schomedindonesia@gmail.com</a>
                    </li>
                </ul>
                <br>
                <div id="map" style="width:100%;height:400px;"></div>
                <br>
				<br>
				<div class="col-lg-6">
					<img class="galery-big-item" src="<?php echo base_url("/assets/img/schomed-pose-4.png")?>" alt="Mascot">
				</div>
				<br>
				<form class="col-lg-6" method="post" action="<?php echo base_url();?>contact_us">
					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" class="form-control" name="firstName" required placeholder="Nama Depan" >
						<br>
						<input type="text" class="form-control" name="lastName" required placeholder="Nama Belakang" >
					</div>
					<div class="form-group">
						<label for="email">Alamat Surat Elektronik</label>
						<input type="email" class="form-control" name="email" required placeholder="Alamat Surat Elektronik" >
					</div>
					
					<div class="form-group" style="width: 100%;">
						<label for="comment">Komentar</label>
						<textarea class="form-control" name="comment" id="comment" style="resize: none;" placeholder="Komentar di sini!"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Serahkan</button>
				</form>
            </div>
        </div>
    </section>

    <hr>

	<!-- Media Section -->
    <section id="media" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
           		<br><br><br>
                <h2><b>Pernah Diliput:</b></h2>
                <br>
                <div class="galery-small">
    				<img class="galery-small-item" src="<?php echo base_url("/assets/img/keker.png")?>" alt="Keker">
    				<img class="galery-small-item" src="<?php echo base_url("/assets/img/logo-harian-fajar1.jpeg")?>" alt="Fajar">
    				<img class="galery-small-item" src="<?php echo base_url("/assets/img/logo-header.png")?>" alt="Rakyatku.com">
    				<img class="galery-small-item" src="<?php echo base_url("/assets/img/logo-online-upeks.png")?>" alt="Upeks.co.id">
    				<img class="galery-small-item" src="<?php echo base_url("/assets/img/untitled-1.png")?>" alt="Sinova">
                </div>

            </div>
        </div>
    </section>

    <br><br><br><hr>
	
	<a id="to-top" href="#page-top" class="btn btn-dark btn-lg page-scroll"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <h6>Dibuat Oleh:<br><br>
            - Hery Nugroho<br>
            - Wildan Lutfi S F S<br><br>
            Teknik Informatika ITS</h6>
        </div>
        
    </footer>

	<!-- Script -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
	<script>
		function initMap() {
			var uluru = {lat: -5.1148773, lng: 119.5253422};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 18,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
    </script>
    <script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArNMtKRft5e7Ub6A2f1tFqy41YG04xBwQ&callback=initMap">
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
</body>
</html>

<!-- #038d3d -->