<!DOCTYPE html>
<html style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>SIKONDANG | Sistem Informasi Kota Serang Dalam Angka </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/favicon/apple-touch-icon-precomposed.png">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/mainf.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/media.css">
    <script src="<?php echo base_url();?>simpatik_files/modernizr-2.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>simpatik_files/pro_dropdown_2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>simpatik_files/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatable/datatables.css">
    <link rel="icon" href="<?php echo base_url();?>simpatik_files/sikondang.png">
    <style>
        .overlay{
            background-color: rgba(0,0,0,0.3);
            width: 100%;
            height: 600px;
            padding-top: 50px;
        }
        #hot h2{
            font-size: 36px;
            font-weight: 400;
            color: #4fbfa8;
            text-align: center;
            text-transform: uppercase;
        }
        .box{
            background: #ffffff;
            margin: 0 0 30px;
            border: solid 1px #e6e6e6;
            box-sizing: border-box;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, .3);
        }
        ul.navbar-right li:hover{
            font-weight: bold;
            font-size: 11pt;
        }
        div.bg-serkot {
            margin-top:-20px;
            height: 600px;
            background: url(assets/images/bg_diskominfo.jpg) no-repeat;
            background-position:center;
            background-attachment:fixed;
            background-size:100% 100%;
            -webkit-background-size:100% 100%;
            -moz-background-size:100% 100%;
            -o-background-size:100% 100%;
            -ms-background-size:100% 100%;
        }
        .contact-w3ls{
            padding: 50px 0px;
        }
        section.contact-w3ls {
            margin-top:-29px;
            height: 700px;
            background: url(assets/images/contact.jpg) no-repeat;
            background-position:center;
            background-attachment:fixed;
            background-size:100% 100%;
            -webkit-background-size:100% 100%;
            -moz-background-size:100% 100%;
            -o-background-size:100% 100%;
            -ms-background-size:100% 100%;
        }
        section.contact-w3ls h4 {
            font-size:35px;
            letter-spacing: 1.5px;
            font-weight:normal;
            color:#fff;
            padding-bottom:20px;
            font-family: 'Federo', sans-serif;
            text-align:center;
        }
        section.contact-w3ls label.contact-p1 {
            font-size: 17px;
            letter-spacing: 1px;
            font-weight: 300;
            color:#fff;
            padding-bottom: 10px;
            font-family: 'Federo', sans-serif;
        }
        section.contact-w3ls select#bidang, section.contact-w3ls select#data{
            height:37px;
            font-size:17px;
            font-weight:normal;
            color:#fff;
            background-color:transparent;
            border-radius:0;
            border-color:#fff;
            font-family: 'Lato', sans-serif;
        }
        select#bidang option, select#data option{
            background-color:#fff;
            color: black;
            font-size: 10pt;
        }
        section.contact-w3ls .contact-agileits, .contact-w3-agile1{
            background-color: rgba(0, 0, 0, 0.55);
            padding: 20px 35px;
        }
        #copyright{
            background: #333333;
            color: #cccccc;
            padding: 20px 0px;
            font-size: 12px;
        }
        #copyright p{
            margin: 0px;
        }
        /* return-to-top Styles */

        #return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            display: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            z-index: 999;
        }
        #return-to-top i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 16px;
            top: 13px;
            font-size: 19px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        #return-to-top:hover {
            background: rgba(0, 0, 0, 0.9);
        }
        #return-to-top:hover i {
            color: #fff;
            top: 5px;
        }
    </style>
    <script src="<?php echo base_url();?>simpatik_files/jquery-1.js"></script>
</head>
<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="<?php echo base_url(); ?>" title="SIKONDANG">
                        <img src="<?php echo base_url();?>simpatik_files/sikondang.png" alt="Logo SIKONDANG" style="width:130px;height:40px;margin-top:5px;">
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-home text-primary"></i> Beranda</a></li>
                        <li><a href="<?php echo base_url().'home/grafik'; ?>"><i class="fa fa-chart-bar text-primary"></i> Grafik</a></li>
                        <li><a href="<?php echo base_url().'webadmin'; ?>"><i class="fa fa-user text-primary"></i> Masuk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	<div class="bg-serkot">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <div class="logo-blur" style="float:right">
                            <img src="<?php echo base_url();?>simpatik_files/sikondang.png" width="100%">
                        </div><!--END logo-blur-->
                        <br>
                        <a href="<?php echo base_url().'download'; ?>" class="text-primary" style="position:absolute;top:250px;left:100px;font-size:20pt;font-weight:bold;background-color:#f8f8f8;padding:10px;border-radius:10px;opacity:0.8;"><i class="fa fa-download"></i> Sektorial Statistik</a>
                    </div><!--END col-->
                    <div class="col-lg-6 col-xs-12">
                        <div class="bg-map" style="position:absolute;left:200px;">
                            <table class="tb-map">
                                <tbody><tr>
                                    <td class="bg-center"></td>
                                    <td class="bg-content" style="width:94%">
                                        <i class="title"></i>
                                            <div class="wrap-map" style="background-color:#fff;">
                                                <div class="popover bottom info--bogor"> <div class="arrow"></div> 
                                                    <div class="popover-content"> 
                                                        <h2>Data Geografis</h2>
                                                        <ol class="list-a">
                                                            <li>Terletak antara 5°99’ – 6°22’ LS  dan 106°07’ – 106°25’ BT</li>
                                                            <li>Ketinggian minimum  0 m - maksimum 100 m dari permukaan laut.</li>
                                                            <li>Iklim
                                                                <p>Suhu maksimum 33,800 C  dan suhu terendah 22,500 C</p>               
                                                                <p>Kelembaban udara tertinggi 98 persen dan terendah 38 persen</p>
                                                                <p>Curah hujan rata-rata 109,18 </p>
                                                            </li>
                                                            <li>Wilayah administrasi</li>
                                                        </ol>
                                                        <p>Luas wilayah  26,456,01 Ha, 6 Kecamatan, 66 Kelurahan</p> 

                                                        <h2>Batas Wilayah:</h2>
                                                        <ul class="list-a">
                                                            <li>
                                                                <h4>Utara</h4>
                                                                <p>Kec. Kasemen</p>
                                                            </li>
                                                            <li>
                                                                <h4>Timur</h4>
                                                                <p>Kec. Walantaka</p>
                                                            </li>
                                                            <li>
                                                                <h4>Barat</h4>
                                                                <p>Kec. Cipocok Jaya</p>
                                                            </li>
                                                            <li>
                                                                <h4>Selatan</h4>
                                                                <p>Kec. Curug</p>
                                                            </li>
                                                        </ul>
                                                    </div> 
                                                </div><!--END popover-->
                                                
                                                <div class="tooltip left bgr--barat" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/taktakan_3">Lihat Data per Urusan Kecamatan Taktakan</a></div>                                             
                                                </div><!--END-->
                                                <div class="tooltip right bgr--utara" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/kasemen_1">Lihat Data per Urusan Kecamatan Kasemen</a></div>                                             
                                                </div><!--END-->
                                                <div class="tooltip right bgr--tengah" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/serang_2">Lihat Data per Urusan Kecamatan Serang</a></div>
                                                </div><!--END-->
                                                <div class="tooltip right bgr--timur" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/walantaka_5">Lihat Data per Urusan Kecamatan Walantaka</a></div>
                                                </div><!--END-->
                                                <div class="tooltip left bgr--selatan" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/cipocokjaya_4">Lihat Data per Urusan Kecamatan Cipocok Jaya</a></div>
                                                </div><!--END-->
                                                <div class="tooltip right bgr--selatanx" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/curug_6">Lihat Data per Urusan Kecamatan Curug</a></div>
                                                </div><!--END-->
                                                <div class="tooltip right bgr--selatany" role="tooltip"> <div class="tooltip-arrow"></div> 
                                                    <div class="tooltip-inner"><a title="" href="<?php echo base_url();?>home/kotaserang_7"><b>Kota Serang</b></a></div>
                                                </div><!--END-->

                                                <object width="100%" align="center">
                                                    <embed src="<?php echo base_url();?>assets/images/peta_kota_serang.png" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="exactfit" width="200%" height="480">
                                                </object>
                                            </div><!-- END wrap-map -->
                                            <!-- END wrap-map -->
                                    </td>
                                </tr>
                            </tbody></table>
                        </div><!--END map-->
                    </div><!--END col-->
            </div><!--END row-->
            </div><!--END container-fluid-->
            <br><br>
        </div>
    </div>

        <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fa fa-book"></i> Bidang / Urusan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-w3ls" id="contact">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pendidikan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-pencil-alt"></span>
                                </h1>
                                <p style="color:#fff">Pendidikan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="kesehatan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-plus-square"></span>
                                </h1>
                                <p style="color:#fff">Kesehatan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pupr-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-road"></span>
                                </h1>
                                <p style="color:#fff">Pekerjaan Umum dan Penataan Ruang</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pkp-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-home"></span>
                                </h1>
                                <p style="color:#fff">Perumahan dan Kawasan Pemukiman</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="kkupm-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-umbrella"></span>
                                </h1>
                                <p style="color:#fff">Ketentraman dan Ketertiban Umum Serta Perlindungan Masyarakat</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="sosial-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-users"></span>
                                </h1>
                                <p style="color:#fff">Sosial</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="tk-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-male"></span>
                                </h1>
                                <p style="color:#fff">Tenaga Kerja</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pppa-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-child"></span>
                                </h1>
                                <p style="color:#fff">Pemberdayaan Perempuan dan Perlindungan Anak</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pangan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-apple-alt"></span>
                                </h1>
                                <p style="color:#fff">Pangan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pertanahan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-square"></span>
                                </h1>
                                <p style="color:#fff">Pertanahan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="lh-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-tree"></span>
                                </h1>
                                <p style="color:#fff">Lingkungan Hidup</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="akps-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-file-archive"></span>
                                </h1>
                                <p style="color:#fff">Administrasi Kependudukan dan Pencatatan Sipil</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pmd-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-image"></span>
                                </h1>
                                <p style="color:#fff">Pemberdayaan Masyarakat Desa</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="ppkb-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-female"></span>
                                </h1>
                                <p style="color:#fff">Pengendalian Penduduk dan Keluarga Berencana</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="perhubungan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-plane"></span>
                                </h1>
                                <p style="color:#fff">Perhubungan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="ki-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-laptop"></span>
                                </h1>
                                <p style="color:#fff">Komunikasi dan Informatika</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="ku-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-shopping-cart"></span>
                                </h1>
                                <p style="color:#fff">Koperasi dan UKM</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="pm-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-money-bill"></span>
                                </h1>
                                <p style="color:#fff">Penanaman Modal</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="ko-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-flag"></span>
                                </h1>
                                <p style="color:#fff">Kepemudaan dan Olahraga</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="kebudayaan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-music"></span>
                                </h1>
                                <p style="color:#fff">Kebudayaan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="perpus-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-book"></span>
                                </h1>
                                <p style="color:#fff">Perpustakaan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="thumbnail" style="background:#007fff;">
                            <a href="javascript:" id="kearsipan-toggle">
                                <h1 style="color:#f1d40f">
                                    <span class="fa fa-archive"></span>
                                </h1>
                                <p style="color:#fff">Kearsipan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fa fa-thumbs-up"></i> Layanan Serang Kota</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-info" style="padding:10px;margin-top:-30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide carousel-multi-item multi-item-2" data-ride="carousel" id="multi-item">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="http://serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/pemkot.png'; ?>" alt="Pemkot Serang" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/rabeg.png'; ?>" alt="Rabeg" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/ragem.png'; ?>" alt="Ragem" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/smartcity.png'; ?>" alt="Smartcity" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3">
                                        <center>
                                            <a href="http://serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/pemkot.png'; ?>" alt="Pemkot Serang" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/rabeg.png'; ?>" alt="Rabeg" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/ragem.png'; ?>" alt="Ragem" width="150">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-3">
                                        <center>
                                            <a href="http://sikondang.serangkota.go.id" target="_blank">
                                                <img src="<?php echo base_url().'images/smartcity.png'; ?>" alt="Smartcity" width="150">
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li class="active" data-target="#multi-item" data-slide-to="0"></li>
                                <li data-target="#multi-item" data-slide-to="1"></li>
                                <li data-target="#multi-item" data-slide-to="2"></li>
                                <li data-target="#multi-item" data-slide-to="3"></li>
                                <li data-target="#multi-item" data-slide-to="4"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="text-center">Copyright &copy; 2018. Sistem Informasi Kota Serang Dalam Angka (Sikondang)</p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalData" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <span id="modalHead"></span>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Sumber Data</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url();?>simpatik_files/bootstrap.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
        <script>
            $("#pendidikan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pendidikan</b>",
                content : "<?php foreach($data_pendidikan as $p){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$p->id_bidang.' data-id_data='.$p->id.'>'.$p->jenis_data.'</a><br>'; } ?>",
                placement: "auto",
                trigger: "focus"
            })

            $("#kesehatan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Kesehatan</b>",
                content : "<?php foreach($data_kesehatan as $k){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$k->id_bidang.' data-id_data='.$k->id.'>'.$k->jenis_data.'</a><br>'; } ?>",
                placement: "auto",
                trigger: "focus"
            })

            $("#pupr-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pekerjaan Umum dan Penata Ruang</b>",
                content : "<?php foreach($data_pupr as $pupr){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pupr->id_bidang.' data-id_data='.$pupr->id.'>'.$pupr->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pkp-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Perumahan dan Pemukiman</b>",
                content : "<?php foreach($data_pkp as $pkp){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pkp->id_bidang.' data-id_data='.$pkp->id.'>'.$pkp->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#kkupm-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Ketentraman dan Ketertiban Umum Serta Perlindungan Masyarakat</b>",
                content : "<?php foreach($data_kkupm as $kkupm){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$kkupm->id_bidang.' data-id_data='.$kkupm->id.'>'.$kkupm->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#sosial-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Sosial</b>",
                content : "<?php foreach($data_sos as $sos){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$sos->id_bidang.' data-id_data='.$sos->id.'>'.$sos->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#tk-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Tenaga Kerja</b>",
                content : "<?php foreach($data_tk as $tk){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$tk->id_bidang.' data-id_data='.$tk->id.'>'.$tk->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pppa-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pemberdayaan Perempuan dan Perlindungan Anak</b>",
                content : "<?php foreach($data_pppa as $pppa){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pppa->id_bidang.' data-id_data='.$pppa->id.'>'.$pppa->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pangan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pangan</b>",
                content : "<?php foreach($data_pangan as $pangan){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pangan->id_bidang.' data-id_data='.$pangan->id.'>'.$pangan->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pertanahan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pertanahan</b>",
                content : "<?php foreach($data_tanah as $tanah){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$tanah->id_bidang.' data-id_data='.$tanah->id.'>'.$tanah->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#lh-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Lingkungan Hidup</b>",
                content : "<?php foreach($data_lh as $lh){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$lh->id_bidang.' data-id_data='.$lh->id.'>'.$lh->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#akps-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Administrasi Kependudukan dan Pencatatan Sipil</b>",
                content : "<?php foreach($data_akps as $akps){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$akps->id_bidang.' data-id_data='.$akps->id.'>'.$akps->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pmd-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pemberdayaan Masyarakat Desa</b>",
                content : "<?php foreach($data_pmd as $pmd){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pmd->id_bidang.' data-id_data='.$pmd->id.'>'.$pmd->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#ppkb-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Pengendalian Penduduk dan Keluarga Berencana</b>",
                content : "<?php foreach($data_ppkb as $ppkb){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$ppkb->id_bidang.' data-id_data='.$ppkb->id.'>'.$ppkb->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#perhubungan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Perhubungan</b>",
                content : "<?php foreach($data_hub as $hub){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$hub->id_bidang.' data-id_data='.$hub->id.'>'.$hub->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#ki-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Komunikasi dan Informatika</b>",
                content : "<?php foreach($data_ki as $ki){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$ki->id_bidang.' data-id_data='.$ki->id.'>'.$ki->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#ku-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Koperasi, Usaha Kecil dan Menengah</b>",
                content : "<?php foreach($data_ku as $ku){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$ku->id_bidang.' data-id_data='.$ku->id.'>'.$ku->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#pm-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Penanaman Modal</b>",
                content : "<?php foreach($data_pm as $pm){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$pm->id_bidang.' data-id_data='.$pm->id.'>'.$pm->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#ko-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Kepemudaan dan Olahraga</b>",
                content : "<?php foreach($data_ko as $ko){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$ko->id_bidang.' data-id_data='.$ko->id.'>'.$ko->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#kebudayaan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Kebudayaan</b>",
                content : "<?php foreach($data_keb as $keb){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$keb->id_bidang.' data-id_data='.$keb->id.'>'.$keb->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#perpus-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Perpustakaan</b>",
                content : "<?php foreach($data_perpus as $perpus){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$perpus->id_bidang.' data-id_data='.$perpus->id.'>'.$perpus->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })

            $("#kearsipan-toggle").popover({
                animation: true,
                html: true,
                title: "Bidang / Urusan: <b>Kearsipan</b>",
                content : "<?php foreach($data_arsip as $arsip){echo '- <a href=# data-toggle=modal data-target=#modalData data-id_bidang='.$arsip->id_bidang.' data-id_data='.$arsip->id.'>'.$arsip->jenis_data.'</a><br>'; } ?>",
                placement: "bottom",
                trigger: "focus"
            })
        </script>
        <script>
            $("#modalData").on("show.bs.modal", function(event){
                var button = $(event.relatedTarget);
                var id_bidang = button.data("id_bidang");
                var id_data = button.data("id_data");

                var modal = $(this);

                $.ajax({
                    type: "POST",
                    url: "home/jenisdata",
                    data: {"id_data": id_data, "id_bidang": id_bidang},
                    success: function(response){
                        $("#modalHead").html(response);

                        $(document).ready(function (){
                            var modTitle = document.getElementById("modTitle").innerHTML;
                            var modData = document.getElementById("modData").innerHTML;
                                                $("#table-datatable").DataTable({
                                                    dom: "Bfrtip",
                                                    buttons: [
                                                        {
                                                            extend: "excel",
                                                            autoFilter: true,
                                                            filename: "Bidang " + modTitle + " Jenis Data " + modData,
                                                            sheetName: "Bidang " + modTitle + " Jenis Data " + modData,
                                                            title: "Bidang " + modTitle + "<br> Jenis Data " + modData
                                                        },
                                                        {
                                                            extend: "print",
                                                            autoFilter: true,
                                                            filename: "Bidang " + modTitle + " Jenis Data " + modData,
                                                            sheetName: "Bidang " + modTitle + " Jenis Data " + modData,
                                                            title: "<h3>Bidang/Uruusan : " + modTitle + "<br> Jenis Data : " + modData + "</h3><hr>",
                                                            customize: function ( win ) {
                                                                $(win.document.body)
                                                                    .css( 'font-size', '10pt' );
                                            
                                                                $(win.document.body).find( 'table' )
                                                                    .addClass( 'compact' )
                                                                    .css( 'font-size', 'inherit' );
                                                            }
                                                        }
                                                    ],
                                                    "ajax": "data.txt",
                                                    "columns": [
                                                        { "data": "no" },
                                                        { "data": "tahun" },
                                                        { "data": "jumlah" },
                                                        { "data": "satuan" },
                                                        { "data": "sumber_data" },
                                                        { "data": "ket"}
                                                    ],
                                                    "bDestroy": true
                                                });
                                            });
                    }
                })
            })
        </script>
        <script>
            // ===== Scroll to Top ==== 
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });
        </script>
</body>
</html>