<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Kerja Praktik">
    <meta name="author" content="Hery Nugroho dan Wildan Lutfi">
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.png" type="image/x-icon"/>
    <title>Author</title>
    <!-- jQuery UI -->
    <link href="<?php echo base_url();?>assets/js/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>assets/admin/css/styles.css" rel="stylesheet">

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-6">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="<?php echo base_url();?>">Schomed Indonesia</a></h1>
	              </div>
	           </div>
	           <div class="col-md-6">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Username<b class="caret"></b></a>
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
                    <!-- Main menu -->
                    <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
        <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title">Add Article</div>
        </div>
          <div class="panel-body">
            <form method="post" action="<?php echo base_url()?>addArticle">
            	<div class="form-group">
        			<label for="title">Title</label>
        			<input type="text" name="title" class="form-control">
            	</div>
        		<div class="form-group">
        			<textarea id="ckeditor_full"></textarea>
        		</div>
        		<button type="submit" class="btn btn-primary" >Add</button>
            </form>
          </div>
        </div>

		  </div>
		</div>
    </div>

     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="<?php echo base_url();?>assets/admin/vendors/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/editors.js"></script>
  </body>
</html>