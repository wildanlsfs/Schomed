<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Kerja Praktik">
    <meta name="author" content="Hery Nugroho dan Wildan Lutfi">
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.png" type="image/x-icon"/>

	<title>Teacher</title>

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
										<?php if(isset($_SESSION['logged_in'])){
											echo $_SESSION['username'];
										}?> <b class="caret"></b></a>
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

	<div class="page-content">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar content-box" style="display: block;">
					<ul class="nav">
						<li class="dashboard bar "><a href="#"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
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
										<div class="panel-title">Historis Pembelajaran</div>
										
									</div>
					  				<div class="panel-body">
					  					<div><button id="addHistory" class="btn btn-xs btn-info">Show/Hide Form Add</button></div>
					  					<div>
					  						<br>
					  						<form class="authpage-form" id="form-fulldata" method="post" action="<?php echo base_url()?>addAuthor">
												<div class="form-group">
													<label for="mapel">Mata Pelajaran</label>
													<select class="form-control" id="mapel" name="mapel" form="form-fulldata" required title="Harap Pilih">
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
												</div>
					  							<div class="form-group">
													<label for="materi">Materi</label>
													<input type="text" class="form-control" name="materi" placeholder="Materi Yang Diajarkan" required >
												</div>
												<div class="form-group">
													<label for="ringkasan">Ringkasan</label>
													<textarea class="form-control" name="ringkasan" style="resize: none;" required placeholder="Ringkasan Materi"></textarea>
												</div>
												<div class="form-group">
													<label for="userfile" >Pilih Foto Dokumentasi</label><br>
													<input type="file" name="userfile" id="userfile" class="inputfile" size="20" required />
												</div>
												<button type="submit" style="margin-top: 5px;" class="btn btn-xs btn-primary">Add</button>
											</form>
					  						<br>
					  					</div>
					  					<hr>
					  					<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="teacherRequest">
											<thead>
												<tr>
													<th>ID</th>
													<th>Mata Pelajaran</th>
													<th>Materi</th>
													<th>Ringkasan</th>
													<th>Foto</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($dataHistory as $row)
													echo '<tr class="gradeX">
															<td>'.$row->Mapel.'</td>
															<td >'.$row->Materi.'</td>
															<td>'.$row->Ringkasan.'</td>
															<td class="center"><!-- Image --><img src="'.$row->Dokumentasi.'" class="img-responsive"></td>
														</tr>';
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
		$(document).ready(function (){
			$('#form-fulldata').hide();
			$('#addHistory').click(function(){
    			$('#form-fulldata').toggle();
    		});
		});
	</script>

</body>
</html>

<!-- #038d3d -->