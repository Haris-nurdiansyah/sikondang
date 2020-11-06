    <!--Load the AJAX API--> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . '/home/getdata/'.$x.'/'.$y.'/'.$z.'/'.$u.''?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      //var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      var chart = new google.visualization.BarChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 900, height: 500}); 
    } 
 
    </script> 
<style> 
h1 { 
    text-align: center; 
} 
</style> 

    <div class="row">
         <div class="col-lg-12 panel panel-info" style="padding:0">
            <div class="panel-heading">
                <h4><i class="fa fa-chart-bar"></i> Bidang / Urusan (Grafik)</h4>
            </div>
            <div class="panel-body">
                    <form method="post" action="<?php echo base_url()?>home/get_grafik" class="form-horizontal" name="form-grafik">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Bidang Urusan</b>
                            <?php
                                $style_bidang='class="form-control input-sm" id="id_bidang" onChange="tampilJenisdata()" required="" ';
                                echo form_dropdown('bidang',$q_bidang,$bidang,$style_bidang);
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Jenis Data</b>
                            <?php
                                    $style_jenisdata='class="form-control input-sm" id="id_jenisdata" required="" ';
                                    echo form_dropdown("jenisdata",$q_jenisdata,$jenisdata,$style_jenisdata);
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <b>Tahun</b>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="tahun_awal" value="<?php echo $tahun_awal; ?>" class="form-control" />
                            </div>
                            <div class="col-lg-2">
                                Sampai
                            </div>
                            <div class="col-lg-4">
                                <select name="tahun_akhir" class="form-control" required="">
                                    <option value="2012" <?php if($tahun_akhir == "2012"){echo "selected"; } ?>>2012</option>
                                    <option value="2013" <?php if($tahun_akhir == "2013"){echo "selected"; } ?>>2013</option>
                                    <option value="2014" <?php if($tahun_akhir == "2014"){echo "selected"; } ?>>2014</option>
                                    <option value="2015" <?php if($tahun_akhir == "2015"){echo "selected"; } ?>>2015</option>
                                    <option value="2016" <?php if($tahun_akhir == "2016"){echo "selected"; } ?>>2016</option>
                                    <option value="2017" <?php if($tahun_akhir == "2017"){echo "selected"; } ?>>2017</option>
                                    <option value="2018" <?php if($tahun_akhir == "2018"){echo "selected"; } ?>>2018</option>
                                    <option value="2019" <?php if($tahun_akhir == "2019"){echo "selected"; } ?>>2019</option>
                                    <option value="2020" <?php if($tahun_akhir == "2020"){echo "selected"; } ?>>2020</option>
                                    <option value="2021" <?php if($tahun_akhir == "2021"){echo "selected"; } ?>>2021</option>
                                    <option value="2022" <?php if($tahun_akhir == "2022"){echo "selected"; } ?>>2022</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Model Grafik </b> 
                                <select name="model" class="form-control" required="">
                                    <option value="">-- Pilih Model Grafik --</option>
                                    <option value="column" <?php if($model == "column"){echo "selected"; } ?>>Column</option>
                                    <option value="bar" <?php if($model == "bar"){echo "selected"; } ?>>Bar</option>
                                    <option value="line" <?php if($model == "line"){echo "selected"; } ?>>Line</option>
                                    <option value="pie" <?php if($model == "pie"){echo "selected"; } ?>>Pie</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="submit" id="simpanx" value="Tampilkan Grafik" class="btn btn-primary" /> 
                            </div>
                        </div>
                        
                    </form>
            </div>
            <br><br>
        </div>
        
        <!-- Tampil Grafik ------>
        <div class="col-lg-12 box">
            <h4 class="text-primary"><i class="fa fa-chart-bar"></i> <?php echo strtoupper($title);?></h4>
            <h5 class="text-danger">Bidang/Urusan : <b id="nama_bidang"></b></h5>
            <h5 class="text-danger">Jenis Data : <b id="jenisData"></b></h5>
            <h5 class="text-danger"><i class="far fa-calendar-alt"></i> Tahun : <b><?php echo $tahun_awal." - ".$tahun_akhir; ?></b></h5>
            <hr> 
            
                 <div id="chart_div"></div>
            
        </div>
        <script>
                var bidang = document.getElementById("id_bidang");
                var optBidang = bidang.options[bidang.selectedIndex].text;
                var jenisdata = document.getElementById("id_jenisdata");
                var optData = jenisdata.options[jenisdata.selectedIndex].text;
                
                document.getElementById("nama_bidang").innerHTML = optBidang;
                document.getElementById("jenisData").innerHTML = optData;
        </script>
                                    
</div>
<br>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.chained.min.js"></script>
<script type="text/javascript">
    
    function tampilJenisdata()
    {
	 var idbidang = document.getElementById("id_bidang").value;
	 $.ajax({
		 url:"<?php echo base_url();?>home/pilih_jenisdata/"+idbidang+" ",
		 success: function(response){
		 $("#id_jenisdata").html(response);
		 },
                         
		 dataType:"html"
	 });
         
	 return false;
    }

</script>