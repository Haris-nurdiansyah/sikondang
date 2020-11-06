<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KAFE</title>
<style type="text/css">
    
body, html {
              height: 100%;
              background: url('<?php echo base_url(); ?>images/backround.png'); 
              background-size: 100% 100%;
            }

#section-1 {
    z-index: 1;
    color: #fff;
    height: 30vh;
    background: none;
}

#section-1 .row {
    position: fixed;
}

#section-1 .parallax-layer-back {
    //background: url(<?php //echo base_url(); ?>images/backround.png) no-repeat center center;
    height: 100vh;
    width:100%;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    }

#section-2 {
    z-index: 2;
    position: relative;
    background: none;
    width: 100%; 
    height: 100vh;;
    background-attachment: scroll;
    }

@media only screen and (max-device-width: 1024px) {
    #section-1 .parallax-layer-back {
        background-attachment: scroll;
    }
}
</style>
<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>    
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="parallax">

    <div id="section-1" class="parallax-section">
        
        <!--Parallax content-->
        <div class="parallax-layer parallax-layer-back">

            <!--Container to center the content-->
            <div class="full-bg-img flex-center">
				<div class="container">
                	<div class="row">
                    	<div class="col-xs-4 col-lg-3">
							<img src="<?php echo base_url(); ?>images/logo kota serang.png" class="img-responsive" />
                    	</div>
                        <div class="col-xs-8 col-lg-9">
                        	<h4 class="text-bold">PEMERINTAH KOTA SERANG</h4>
 				<h4 class="text-bold">BADAN PERENCANAAN DAN PEMBANGUNAN</h4>
                                <h4 class="text-bold">SISTEM INFORMASI INFRASTRUKTUR</h4>
                                <h4 class="text-bold"> ::::: S I S A T U R ::::: </h4>
                        </div>
                    </div>
           	 	</div>        
             </div>
            <!--/Container to center the content-->

        </div>
        <!--/Parallax content-->

        <!--Parallax background-->
        <div class="parallax-layer parallax-layer-back"></div>
        <!--/Parallax background-->

    </div>
    <!--/First section-->

    <!--Dummy Content-->
    <div id="section-2">
        <div class="container text-center pt-1 mb-3">
            <!--<div class="row">
            	<div class="col-lg-12">
                    <h3 class="text-muted text-bold">Portal Resmi Organisasi Perangkat Daerah</h3>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-12 text-center">
					
                    <div class="container">
                        <article>
                            <?php $this->load->view($konten); ?>
                        </article>
                        <a href="<?php echo base_url(); ?>home"><span class=" glyphicon glyphicon-backward"></span> Home </a>
                    </div>
                 </div>
            </div>

        </div>
    </div>
    <!--Dummy Content-->

</div>

</body>
</html>


