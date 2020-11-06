<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SIKONDANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<style type="text/css">
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url();?>aset/font/satu.woff) format('woff');
	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url();?>aset/font/dua.woff) format('woff');
	}
	@font-face {
	  font-family: 'Lobster';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Lobster'), url(<?php echo base_url();?>aset/font/tiga.woff) format('woff');
	}	
	
	</style>
    <link rel="stylesheet" href="<?php echo base_url();?>aset/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/css/login.css" media="screen">
	<link rel="icon" href="<?php echo base_url();?>simpatik_files/sikondang.png">
   
    <script src="<?php echo base_url();?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>aset/js/bootswatch.js"></script>
    <script src="<?php echo base_url();?>aset/js/jquery.chained.js"></script>
  <body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand"><strong style="font-family: verdana; z-index: 10; text-align: center">Selamat datang di Aplikasi SIKONDANG Dinas Komunikasi dan Informatika</strong></span>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
      </div>
    </div>

    <div class="container">
	
	<br><br><br><br>

	<div class="container-fluid" style="margin-top: 30px">
	
      <div class="row-fluid">
		
		<div class="well" style="width: 420px; margin: 10px auto; border: solid 1px #d9d9d9; padding: 15px 20px; border-radius: 8px">
		<form class="form-horizontal" role="form" action="<?php echo site_url('webadmin/proses');?>" method="post">
		<img src="upload/logo2.jpg" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width:100px; height: 100px">
		<h2 style="margin: 5px 0 0.4em 0; font-size: 12pt; color: #000; font-weight: bold"></h2>
		<div style="color: #000; font-size: 8pt;" class="clearfix">
        	<br>
            <h4 class="text-primary">SIKONDANG<br> Diskominfo <br> Kota Serang - Banten</h4>

        </div>

		<legend><h3>Login Pengguna</h3></legend>

		    <div class="form-group">
		        <label for="inputtext">Nama Pengguna :</label>
		        <input type="text" autofocus name="username" autofocus class="form-control" class="form-control" placeholder="Masukkan nama pengguna...">
		    </div>
		    <div class="form-group">
		        <label for="inputPassword">Password :</label>
		        <input type="password" name="password" class="form-control" placeholder="Masukkan password...">
		    </div>
		    <div class="checkbox">
		        <label><input type="checkbox"> Remember me</label>
		    </div>
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		</form>
		</div>
      </div>

    </div>

    <br><br><br><br>

	<script type="text/javascript">
	$(document).ready(function(){
		$(" #alert" ).fadeOut(6000);
	});
	</script>
	  
    </div>
  
</body>
</html>