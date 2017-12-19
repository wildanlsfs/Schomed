<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Kerja Praktik">
    <meta name="author" content="Hery Nugroho dan Wildan Lutfi">
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.png" type="image/x-icon"/>

	<title>Administrasi</title>

	<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" media="screen">

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/admin/css/styles.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/admin/css/forms.css" rel="stylesheet">

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo">
						<h1><a href="<?php echo base_url();?>">Schomed Indonesia</a></h1>
					</div>
				</div>
				<div class="col-md-6">
					<div class="navbar navbar-inverse" role="banner">
						<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<?php if(isset($_SESSION['logged_in_admin'])){
											echo $_SESSION['Username'];
										}?> 
										<b class="caret"></b></a>
									<ul class="dropdown-menu animated fadeInUp">
										<li><a href="<?php echo base_url();?>">Logout</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<div id="testError"></div>
	<!--  -->
	<div class="page-content">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar content-box" style="display: block;">
					<ul class="nav">
						<li class="dashboard bar current"><a href="#"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
						<li class="salary bar "><a href="#"><i class="glyphicon glyphicon-credit-card"></i>Salary</a></li>
						<li class="teacher bar "><a href="#"><i class="glyphicon glyphicon-pencil"></i>Teacher</a></li>
						<li class="student bar "><a href="#"><i class="glyphicon glyphicon-pencil"></i>Student</a></li>
						<li class="author bar "><a href="#"><i class="glyphicon glyphicon-pencil"></i>Author</a></li>
						<li class="comment bar "><a href="#"><i class="glyphicon glyphicon-comment"></i>Comments</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<section id="dashboard">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<div class="panel-title">Teacher Request</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="teacherRequest">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Full Name</th>
													<th>Deadline</th>
													<th width="150px">Image</th>
													<th width="75px">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													foreach($reqTentor->result() as $row){
														echo '
															<tr class="gradeX">
																<td>'.$row->ID.'</td>
																<td>'.$row->NamaLengkap.'</td>
																<td>'.$row->MaksimalKonfirmasi.'</td>
																<td class="center">
																	<img class="img-responsive" src="'.$row->BuktiPrestasi.'" class="img">
																</td>
																<td class="center">
																	<button style="margin-top: 5px;" class="btn btn-xs btn-success btn-accept-teacher" value="'.$row->ID.'">Accept</button>
																	<button style="margin-top: 5px;" class="btn btn-xs btn-danger btn-decline-teacher" value="'.$row->ID.'">Decline</button>
																</td>
															</tr>
														';
													}
												?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<div class="panel-title">Student Request</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="studentRequest">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Full Name</th>
													<th>Total Pembayaran</th>
													<th>Deadline</th>
													<th width="150px">Image</th>
													<th width="75px">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													foreach($reqSiswa->result() as $row){
														echo '
															<tr class="gradeX">
																<td>'.$row->IDSiswa.'</td>
																<td>'.$row->NamaSiswa.'</td>
																<td>'.$row->JumlahPembayaran.'</td>
																<td>'.$row->MaksimalPembayaran.'</td>
																<td class="center">
																	<img class="img-responsive" src="'.$row->BuktiPembayaran.'" class="img">
																</td>
																<td class="center">
																	<button style="margin-top: 5px;" class="btn btn-xs btn-success btn-accept-student" value="'.$row->IDSiswa.'">Accept</button>
																	<button style="margin-top: 5px;" class="btn btn-xs btn-danger btn-decline-student" value="'.$row->IDSiswa.'">Decline</button>
																</td>
															</tr>
														';
													}
												?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
				<section id="salary">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<div class="panel-title">Teacher Salary</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="teacherSalary">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Full Name</th>
													<th>Rating</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($dataSalary->result() as $row) {
														echo '
															<tr class="gradeX">
																<td>'.$row->ID.'</td>
																<td>'.$row->NamaLengkap.'</td>
																<td>10/10</td>
																<td>
																	Rp. <input type="number" name="gaji" value="'.$row->Gaji.'" min="0" max="200000" class="gaji-input-field">  
																	<button class="btn btn-success btn-xs btn-confirm" value="'.$row->ID.'">Confirm</button>
																</td>
															</tr>
														';
													}
												?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
				<section id="teacher">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<!-- <div class="panel-title">CRUD Teacher</div> -->
										<div class="panel-title">Teacher List</div>
									</div>
					  				<div class="panel-body">
					  					<!-- <div><button id="addTeacher" class="btn btn-info btn-xs">Show/Hide Form Add</button></div>
					  					<div>
					  						<br>
					  						<form class="authpage-form" id="form-fulldata" method="post" action="<?php echo base_url()?>addTeacher">
					  							<div class="form-group">
													<label for="email">Alamat Surat Elektronik</label>
													<input type="email" class="form-control" name="email" placeholder="Alamat Surat Elektronik" required>
												</div>
												<div class="form-group">
													<label for="pass">Password</label>
													<input id="pass" type="password" class="form-control" name="pass" placeholder="Password" required>
												</div>
												<div class="form-group">
													<label for="fname">Nama Lengkap</label>
													<input type="text" class="form-control" name="fname" placeholder="Nama Lengkap" required>
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
													<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap (cth: Jl. Poros Tamalanrea, Perumahan BTP Blok L No. 1000 Samping Toko Anugrah))" required>
												</div>
												<div class="form-group">
													<label for="notelp">No Telepon</label>
													<input type="text" class="form-control" name="notelp" placeholder="No Telepon (cth:08**********)" required>
												</div>
												<div class="form-group">
													<label for="lineID">ID Line</label>
													<input type="text" class="form-control" name="lineID" placeholder="ID LINE" required>
												</div>
												<div class="form-group">
													<label for="wa">Nomer WhatsApp</label>
													<input type="text" class="form-control" name="wa" placeholder="Nomer WhatsApp" required>
												</div>
												<div class="form-group">
													<label for="asaluniv">Asal Universitas</label>
													<input type="text" class="form-control" name="asaluniv" placeholder="Asal Universitas" required>
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
													<label for="mapeltentor1">Mata Pelajaran Pertama</label>
													<select class="form-control" name="mapeltentor1" form="form-fulldata" required>
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
													<label for="mapeltentor2">Mata Pelajaran Kedua</label>
													<select class="form-control" name="mapeltentor2" form="form-fulldata" >
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
													<label for="mapeltentor3">Mata Pelajaran Ketiga</label>
													<select class="form-control" name="mapeltentor3" form="form-fulldata" required>
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
												<div class="form-group">
													<label for="userfile">PILIH Berkas</label><br><br>
													<input type="file" name="userfile" class="inputfile" size="20" required>
												</div>
												<button type="submit" style="margin-top: 5px;" class="btn btn-xs btn-primary">Add</button>
											</form>
					  						<br>
					  					</div>
					  					<hr>
					  					<div>
					  						<br>
					  						<div class="panel-title">Teacher List</div>
					  						<br>
					  					</div>
					  					<br> -->
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="teacherCRUD">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Full Name</th>
													<th>Gender</th>
													<th>Phone Number</th>
													<th>University</th>
													<th>Status</th>
													<!-- <th width="75px">Action</th> -->
												</tr>
											</thead>
											<tbody>
												<?php foreach($dataTeacher->result() as $row){
													echo '
														<tr class="gradeX">
															<td>'.$row->ID.'</td>
															<td>'.$row->NamaLengkap.'</td>
															<td>'.$row->JenisKelamin.'</td>
															<td>'.$row->NoTelp.'</td>
															<td>'.$row->AsalUniv.'</td>
															<td>'.$row->Status.'</td>
														</tr>
													';
													// echo '
													// 	<tr class="gradeX">
													// 		<td>'.$row->ID.'</td>
													// 		<td>'.$row->NamaLengkap.'</td>
													// 		<td>'.$row->JenisKelamin.'</td>
													// 		<td>'.$row->NoTelp.'</td>
													// 		<td>'.$row->AsalUniv.'</td>
													// 		<td>'.$row->Status.'</td>
													// 		<td>
													// 			<button style="margin-top: 5px;" class="btn btn-xs btn-info btn-edit-teacher" value=""><a href="'.base_url("editTeacher/").$row->ID.'">Edit</a></button>
													// 		</td>
													// 	</tr>
													// ';
												}?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
				<section id="student">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
					  					<div class="panel-title">Student List</div>
										<!-- <div class="panel-title">CRUD Student</div> -->
									</div>
					  				<div class="panel-body">
					  					<!-- <div><button id="addStudent" class="btn btn-info btn-xs">Show/Hide Form Add</button></div>
					  					<div>
					  						<br>
					  						<form class="authpage-form" id="form-fulldata2" method="post" action="<?php echo base_url()?>addStudent">
												<div class="form-group">
													<label for="email">Alamat Surat Elektronik</label>
													<input type="email" class="form-control" name="email" placeholder="Alamat Surat Elektronik" required>
												</div>
												<div class="form-group">
													<label for="pass">Password</label>
													<input id="pass" type="password" class="form-control" name="pass" placeholder="Password" required>
												</div>
												<div class="form-group">
													<label for="fname">Nama Lengkap</label>
													<input type="text" class="form-control" name="fname" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group">
													<label for="jeniskelamin">Jenis Kelamin</label>
													<select class="form-control" name="jeniskelamin" form="form-fulldata2">
														<option value="lakilaki">Laki-Laki</option>
														<option value="perempuan">Perempuan</option>
													</select>
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap (cth: Jl. Poros Tamalanrea, Perumahan BTP Blok L No. 1000 Samping Toko Anugrah))" required>
												</div>
												<div class="form-group">
													<label for="notelp">No Telepon</label>
													<input type="text" class="form-control" name="notelp" placeholder="No Telepon (cth:08**********)" required>
												</div>
												<div class="form-group">
													<label for="lineID">ID Line</label>
													<input type="text" class="form-control" name="lineID" placeholder="ID LINE" required>
												</div>
												<div class="form-group">
													<label for="asalsekolah">Asal Sekolah</label>
													<input type="text" class="form-control" name="asalsekolah" placeholder="Asal Sekolah" required>
												</div>
												<div class="form-group">
													<label for="tingkatan">Tingkatan</label>
													<select class="form-control" name="tingkatan" form="form-fulldata2" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
														<option value="TK/RA">TK/RA</option>
														<option value="Kelas I (SD/MI)">Kelas I (SD/MI)</option>
														<option value="Kelas II (SD/MI)">Kelas II (SD/MI)</option>
														<option value="Kelas III (SD/MI)">Kelas III (SD/MI)</option>
														<option value="Kelas IV (SD/MI)">Kelas IV (SD/MI)</option>
														<option value="Kelas V (SD/MI)">Kelas V (SD/MI)</option>
														<option value="Kelas VI (SD/MI)">Kelas VI (SD/MI)</option>
														<option value="Kelas VII (SMP/MTs">Kelas VII (SMP/MTs)</option>
														<option value="Kelas VIII (SMP/MTs)">Kelas VIII (SMP/MTs)</option>
														<option value="Kelas IX (SMP/MTs)">Kelas IX (SMP/MTs)</option>
														<option value="Kelas X (SMA/MA)">Kelas X (SMA/MA)</option>
														<option value="Kelas XI (SMA/MA)">Kelas XI (SMA/MA)</option>
														<option value="Kelas XII (SMA/MA)">Kelas XII (SMA/MA)</option>
														<option value="ALUMNI SMA">ALUMNI SMA</option>
													</select>
												</div>
												<div class="form-group">
													<label for="paket">Paket</label>
													<select id="jumlah" class="form-control" name="banyaksiswa" form="form-fulldata2" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
													    <option value="Satu">1 Siswa</option>
													    <option value="Dua">2 Siswa</option>
													    <option value="Tiga">3 Siswa</option>
													    <option value="Empat">4 Siswa</option>
													    <option value="Lima">5 Siswa</option>
													</select>
													<br>
													<select id="time" class="form-control" name="durasibelajar" form="form-fulldata2" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
													    <option value="t60">60 Menit/Pertemuan</option>
													    <option value="t90">90 Menit/Pertemuan</option>
													    <option value="t120">120 Menit/Pertemuan</option>
													</select>
													<br>
													<select id="pertemuan" class="form-control" name="banyakpertemuan" form="form-fulldata2" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
													    <option value="3">Harian (3 Pertemuan)</option>
													    <option value="6">Mingguan (6 Pertemuan)</option>
													    <option value="12">Bulanan (12 Pertemuan)</option>
													    <option value="96">Tahunan (96 pertemuan)</option>
													</select>
													<br>
													
													<i>catatan: biaya sudah termasuk total keseluruhan siswa</i>
													<input type="text" class="form-control" name="jumlahpembayaran" id="jumlahpembayaran" value="0" readonly>
												</div>
												<div class="form-group">
													<label for="classtype">Program Pembelajaran</label>
													<select class="form-control" name="program" form="form-fulldata2" id="program" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
														<option value="osn">Kelas OSN</option>
														<option value="sbmptn">Kelas SBMPTN</option>
														<option value="persiapan">Kelas Persiapan</option>
														<option value="khusus">Kelas Khusus</option>
													</select>
													<br>
													<select class="form-control" name="classtype" form="form-fulldata2" id="classtype" required title="Harap Pilih">
														<option value="" disabled selected>-- Pilih --</option>
													</select>
												</div>
												<div class="form-group">
													<label for="banyakMapel">Banyak Mapel Yang Diinginkan</label>
													<select class="form-control" id="banyakMapel" name="banyakMapel" form="form-fulldata2" >
														<option value="1" selected>1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
												</div>
												<div class="form-group">
													<label for="mapel1">Mata Pelajaran ke 1</label>
													<select class="form-control" id="mapel1" name="mapel1" form="form-fulldata2" required title="Harap Pilih">
														<option value="" selected disabled>Pilih</option>
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
													<label for="tentor1">Tentor Mata Pelajaran Ke 1</label>
													<select class="form-control" id="tentor1" name="tentor1" form="form-fulldata2"  required title="Harap Pilih">
														<option value="" selected disabled>Pilih</option>
													</select>
													<br>
													<label for="kuota1">Banyak Pertemuan Mata pelajaran ke 1</label>
													<input class="form-control" type="number" id="kuota1" name="kuota1" value="0" required min="0" max="">
													<br>
													<div id="ke2">
														<label for="mapel2">Mata Pelajaran ke 2</label>
														<select class="form-control" id="mapel2" name="mapel2" form="form-fulldata2"  required title="Harap Pilih">
															<option value="" selected disabled>Pilih</option>
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
														<label for="tentor2">Tentor Mata Pelajaran Ke 2</label>
														<select class="form-control" id="tentor2" name="tentor2" form="form-fulldata2"  required title="Harap Pilih">
															<option value="" selected disabled>Pilih</option>
														</select>
														<br>
														<label for="kuota2">Banyak Pertemuan Mata pelajaran ke 2</label>
														<input class="form-control" type="number" id="kuota2" name="kuota2" value="0" required min="3" max="">
													</div>
													<br>
													<div id="ke3">
														<label for="mapel3">Mata Pelajaran ke 3</label>
														<select class="form-control" id="mapel3" name="mapel3" form="form-fulldata2"  required title="Harap Pilih">
															<option value="" selected disabled>Pilih</option>
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
														<label for="tentor3">Tentor Mata Pelajaran Ke 3</label>
														<select class="form-control" id="tentor3" name="tentor3" form="form-fulldata2"  required title="Harap Pilih">
															<option value="" selected disabled>Pilih</option>
														</select>
														<br>
														<label for="kuota3">Banyak Pertemuan Mata pelajaran ke 3</label>
														<input class="form-control" type="number" id="kuota3" name="kuota3" value="0" required min="0" max="">
													</div>
												</div>
												<div class="form-group">
													<label for="userfile">PILIH BERKAS</label><br><br>
													<input type="file" name="userfile" class="inputfile" size="20" required />
												</div>
												<button type="submit" style="margin-top: 5px;" class="btn btn-xs btn-primary">Add</button>
											</form>
					  						<br>
					  					</div>
					  					<hr>
					  					<div>
					  						<br>
					  						<div class="panel-title">Student List</div>
					  						<br>
					  					</div>
					  					<br> -->
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="studentCRUD">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Full Name</th>
													<th>Phone Number</th>
													<th>Gender</th>
													<th>Status</th>
													<!-- <th width="75px">Action</th> -->
												</tr>
											</thead>
											<tbody>

												<?php foreach($dataStudent->result() as $row){
													echo '
														<tr class="gradeX">
															<td>'.$row->ID.'</td>
															<td>'.$row->NamaLengkap.'</td>
															<td>'.$row->NoTelp.'</td>
															<td>'.$row->JenisKelamin.'</td>
															<td>'.$row->Status.'</td>
														</tr>
													';
													// echo '
													// 	<tr class="gradeX">
													// 		<td>'.$row->ID.'</td>
													// 		<td>'.$row->NamaLengkap.'</td>
													// 		<td>'.$row->NoTelp.'</td>
													// 		<td>'.$row->JenisKelamin.'</td>
													// 		<td>'.$row->Status.'</td>
													// 		<td>
													// 			<button style="margin-top: 5px;" class="btn btn-xs btn-info btn-edit-student" value=""><a href="'.base_url("editStudent/").$row->ID.'">Edit</a></button>
													// 		</td>
													// 	</tr>
													// ';
												}?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
				<section id="author">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<div class="panel-title">Add or Delete Author</div>
									</div>
					  				<div class="panel-body">
					  					<div><button id="addAuthor" class="btn btn-info btn-xs">Show/Hide Form Add</button></div>
					  					<div>
					  						<br>
					  						<form class="authpage-form" id="form-fulldata3" method="post" action="<?php echo base_url()?>addAuthor">
												<div class="form-group">
													<label for="uname">Username</label>
													<input type="text" class="form-control" name="uname" placeholder="Username" required >
												</div>
												<div class="form-group">
													<label for="pass">Password</label>
													<input id="pass" type="password" class="form-control" name="pass" placeholder="Password" required >
												</div>
												<button type="submit" style="margin-top: 5px;" class="btn btn-xs btn-primary">Add</button>
											</form>
					  						<br>
					  					</div>
					  					<hr>
					  					<div>
					  						<br>
					  						<div class="panel-title">Author List</div>
					  						<br>
					  					</div>
					  					<br>
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="authorCRUD">
											<thead>
												<tr>
													<th width="30px">ID</th>
													<th>Username</th>
													<th width="75px">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($dataAuthor->result() as $row){
													echo '
														<tr class="gradeX">
															<td>'.$row->ID.'</td>
															<td>'.$row->Username.'</td>
															<td>
																<button style="margin-top: 5px;" class="btn btn-xs btn-danger btn-delete-author" value="'.$row->ID.'">Delete</button>
															</td>
														</tr>
													';
												}?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
				<section id="comment">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10">
								<div class="content-box-large">
					  				<div class="panel-heading">
										<div class="panel-title">Comments</div>
									</div>
					  				<div class="panel-body">
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="commentTable">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Comments</th>
													<th>Date</th>
												</tr>
											</thead>
											<tbody>
												<?php
													foreach ($dataComment->result() as $row) {
														echo '
															<tr class="gradeX">
																<td>'.$row->NamaLengkap.'</td>
																<td>'.$row->Email.'</td>
																<td class="center">'.$row->Komentar.'</td>
																<td class="center">'.$row->Tanggal.'</td>
															</tr>
														';
													}
												?>
											</tbody>
										</table>
					  				</div>
					  			</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/select/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/moment/moment.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>


	<script src="<?php echo base_url();?>assets/admin/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/tables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/forms.js"></script>
    <script>
    	$(document).ready(function(){
    		// hide every non active element
    		$('#form-fulldata').hide();
    		$('#form-fulldata2').hide();
    		$('#form-fulldata3').hide();
    		$('#salary').hide();
    		$('#teacher').hide();
    		$('#student').hide();
    		$('#author').hide();
    		$('#comment').hide();
    		$('.bar').click(function(){
    			$('#dashboard').hide();
    			$('#salary').hide();
				$('#teacher').hide();
				$('#student').hide();
				$('#author').hide();
				$('#comment').hide();
    			$('.bar').removeClass( "current" );
    			$(this).addClass("current");
    		});
    		$('.dashboard').click(function(){
    			$('#dashboard').show();
    		});
    		$('.salary').click(function(){
    			$('#salary').show();
    		});
    		$('.teacher').click(function(){
    			$('#teacher').show();
    		});
    		$('.student').click(function(){
    			$('#student').show();
    		});
    		$('.author').click(function(){
    			$('#author').show();
    		});
    		$('.comment').click(function(){
    			$('#comment').show();
    		});
			$('#addTeacher').click(function(){
    			$('#form-fulldata').toggle();
    		});
    		$('#addStudent').click(function(){
    			$('#form-fulldata2').toggle();
    		});
    		$('#addAuthor').click(function(){
    			$('#form-fulldata3').toggle();
    		});
    	});
    </script>
    <script>
		$(document).ready(function () {
			$('#program').change(function(){
				var val = $(this).val();
				if(val == "osn" || val == "sbmptn" || val == "persiapan"){
					$('#classtype').html('<option value="reguler">Kelas Reguler</option><option value="intensif">Kelas Intensif</option>');
				}else{
					$('#classtype').html('<option value="liburan">Kelas Liburan</option><option value="ramadhan">Kelas Ramadhan</option>)');
				} 
			});
			$('#form-fulldata2').change(function (){
				var val1 = $('#jumlah').val();
				var val2 = $('#time').val();
				var val3 = $('#pertemuan').val();
				var val4 = $('#banyakMapel').val();
				var val6 = $('#kuota1').val();
				var val7 = $('#kuota2').val();
				var val8 = $('#kuota3').val();
				var max  = val3;

				if(val1 == "Satu"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  225000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  360000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  450000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Dua"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  2 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  2 * 300000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  2 * 390000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Tiga"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  3 * 135000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  3 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  3 * 33000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Empat"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  4 * 75000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  4 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  4 * 270000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Lima"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  5 * 60000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  5 * 150000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  5 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    }
			    if(val4 == "1"){
			    	$('#kuota1').attr("max", max);
			    } else if(val4 == "2"){
			    	$('#kuota1').attr("max", max - val7);
			    	$('#kuota2').attr("max", max - val6);
			    } else if(val4 == "3"){
			    	$('#kuota1').attr("max", max - val7 - val8);
			    	$('#kuota2').attr("max", max - val6 - val8);
			    	$('#kuota3').attr("max", max - val6 - val7);
			    }
			});
		});
	</script>
	<script >
	    $(document).ready(function(){
	    	$('#ke2').hide();
			$('#ke3').hide();
	    	$('#banyakMapel').change(function(){
	    		var val = $(this).val();
	    		if(val == 1){
	    			$('#ke2').hide();
					$('#ke3').hide();
	    		}
	    		else if(val == 2){
	    			$('#ke2').show();
	    			$('#ke3').hide();
	    		}
	    		else if(val == 3){
	    			$('#ke2').show();
	    			$('#ke3').show();
	    		}
	    	});
	        $('#mapel1').change(function(){
	            var val 	= $('#mapel1').val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList1",
	                method : "POST",
	                data : {mapel1: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor1').html(html);

	                }
	            });
	        });
	        $('#mapel2').change(function(){
	            var val 	= $('#mapel2').val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList2",
	                method : "POST",
	                data : {mapel2: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor2').html(html);
	                }
	            });
	        });
	        $('#mapel3').change(function(){
	            var val 	= $('#mapel3').val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList3",
	                method : "POST",
	                data : {mapel3: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor3').html(html);
	                }
	            });
	        });
	    });
	</script>
	<script>
		$(document).ready(function(){
			$('.btn-delete-author').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/deleteAuthor",
						method: "POST",
						data: {ID: id },
						success: function(response){
							thisOne.closest('tr').fadeOut(800, function(){ 
								$(this).remove();
							});
						}

					});
				}
			});
			$('.btn-confirm').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					var gaji = $(this).prev().val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/changeSalary",
						method: "POST",
						data: {ID: id, Gaji: gaji },
						success: function(response){
							thisOne.closest('input').val(gaji);
						}
					});
				}
			});
			$('.btn-accept-teacher').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/acceptTeacher",
						method: "POST",
						data: {ID: id },
						success: function(response){
							thisOne.closest('tr').fadeOut(800, function(){ 
								$(this).remove();
							});
						},
						error: function(tr){
							$('#testError').html(tr.responseText)
						}

					});
				}
			});
			$('.btn-decline-teacher').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/declineTeacher",
						method: "POST",
						data: {ID: id },
						success: function(response){
							thisOne.closest('tr').fadeOut(800, function(){ 
								$(this).remove();
							});
						},
						error: function(tr){
							$('#testError').html(tr.responseText)
						}

					});
				}
			});
			$('.btn-accept-student').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/acceptStudent",
						method: "POST",
						data: {ID: id },
						success: function(response){
							thisOne.closest('tr').fadeOut(800, function(){ 
								$(this).remove();
							});
						},
						error: function(tr){
							$('#testError').html(tr.responseText)
						}

					});
				}
			});
			$('.btn-decline-student').click(function(event){
				if(confirm("Are You Sure?")){
					var thisOne = $(this);
					var id = $(this).val();
					$.ajax({
						url: "<?php echo base_url();?>admin_page/declineStudent",
						method: "POST",
						data: {ID: id },
						success: function(response){
							thisOne.closest('tr').fadeOut(800, function(){ 
								$(this).remove();
							});
						},
						error: function(tr){
							$('#testError').html(tr.responseText)
						}

					});
				}
			});
		});
	</script>
</body>
</html>

<!-- #038d3d -->