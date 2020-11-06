<!DOCTYPE html>
<html style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>SIKONDANG | Sistem Informasi Kota Serang Dalam Angka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/favicon/apple-touch-icon-precomposed.png">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>simpatik_files/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/mainf.css">
    <link rel="stylesheet" href="<?php echo base_url();?>simpatik_files/media.css">
    <script src="<?php echo base_url();?>simpatik_files/modernizr-2.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>simpatik_files/pro_dropdown_2.css">
    <link rel="icon" href="<?php echo base_url();?>simpatik_files/sikondang.png">
    <script src="<?php echo base_url();?>simpatik_files/jquery-1.js"></script>
    <style>
      .box{
            background: #ffffff;
            margin: 0 0 30px;
            border: solid 1px #e6e6e6;
            box-sizing: border-box;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, .3);
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
        ul.navbar-right li:hover{
            font-weight: bold;
            font-size: 11pt;
        }
        .bg-light {
          background-color: #f8f9fa !important;
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
        @media print{
            body *{
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print{
                position: absolute;
                left: 0;
                top: -520px;
            }
        }
    </style>
    <?php if($model !== "pie"){ ?>
    <style>
        @media print{
            #section-to-print>.chart-responsive>#chartData{
                width: 1050px !important;
            }
        }
    </style>
    <?php } ?>
</head>
<body class="bg-light">
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
  <nav class="navbar navbar-default">
        <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url();?>simpatik_files/sikondang.png" alt="Logo SIKONDANG" style="width:130px;height:40px;margin-top:5px;">
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home text-primary"></i> Beranda</a></li>
                        <li class="active"><a href="<?php echo base_url().'home/grafik'; ?>"><i class="fa fa-chart-bar text-primary"></i> Grafik</a></li>
                        <li><a href="<?php echo base_url().'webadmin'; ?>"><i class="fa fa-user text-primary"></i> Masuk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	<div class="container" style="min-height:600px">
    <?php $this->load->view($konten);?>
	</div>
  <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="text-center">Copyright &copy; 2018. Sistem Informasi Kota Serang Dalam Angka (Sikondang)</p>
                </div>
            </div>
        </div>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>simpatik_files/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/chart.js/Chart.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
        <script>
            function BuildChart(values){
                var data = {
                    labels: ["Serang", "Curug", "Taktakan", "Walantaka", "Cipocok Jaya", "Kasemen", "Kota Serang"],
                    datasets: [{
                        label: "Data Bidang / Urusan",
                        data: values,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }],
                };

                var ctx = document.getElementById("chartData").getContext("2d");
                var model = "<?php echo $model; ?>";
                if(model !== "pie" && model !== "bar"){
                    var myChart = new Chart(ctx, {
                        type: model,
                        data: data,
                        options: {
                            responsive: true,
                            animation: {
                                onComplete: function () {
                                    var ctx = this.chart.ctx;
                                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                                    ctx.fillStyle = "red";
                                    ctx.textAlign = 'center';
                                    ctx.textBaseline = 'bottom';

                                    this.data.datasets.forEach(function (dataset)
                                    {
                                        for (var i = 0; i < dataset.data.length; i++) {
                                            for(var key in dataset._meta)
                                            {
                                                var model = dataset._meta[key].data[i]._model;
                                                ctx.fillText(dataset.data[i], model.x, model.y - 5);
                                            }
                                        }
                                    });
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
                else if(model == "bar"){
                    var myChart = new Chart(ctx, {
                        type: model,
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                labels: {
                                    render: "value"
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
                else if(model == "pie"){
                    var myChart = new Chart(ctx, {
                        type: model,
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                labels: [
                                    {
                                        render: "value",
                                        position: "outside"
                                    },
                                    {
                                        render: "percentage"
                                    }
                                ]
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }

                return myChart;
            }

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200){
                    var json = JSON.parse(this.response);

                    var values = json.map(function (e){
                        return (e.jumlah);
                    });

                    BuildChart(values);

                    total = 0;
                    data = values;

                    for(i = 0; i < data.length; i++){
                        total += parseInt(data[i]);
                    }
                    $("#infoTotal").html(total);
                }
            };
            xhttp.open("GET", "../data.json", true);
            xhttp.send();
        </script>
        <script>
            $("#btnPrint").click(function (){
                window.print();
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