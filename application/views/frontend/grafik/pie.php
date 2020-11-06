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
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 900, height: 500}); 
    } 
 
    </script> 
<style> 
h1 { 
    text-align: center; 
} 
</style> 

<div class=" container-fluid" style="background-color: #FFF; border-radius:15px;">
    <div class="row">
        
         <div class="col-lg-4">
            <form method="post" action="<?php echo base_url()?>home/get_grafik" class="form-horizontal" name="form-grafik" style="padding: 10px; height:600px; background-color: #f5f5f5;">
                 <div class="form-group">
                    <div class="col-lg-12">
                        <b>Bidang Urusan</b>
                    <?php
                        $style_bidang='class="form-control input-sm" id="id_bidang" onChange="tampilJenisdata()" required="" ';
                        echo form_dropdown('bidang',$q_bidang,'',$style_bidang);
                     ?>
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-lg-12">
                        <b>Jenis Data</b> 
                    <?php
                            $style_jenisdata='class="form-control input-sm" id="id_jenisdata" required="" ';
                            echo form_dropdown("jenisdata",array(''=>'- Pilih Jenis Data -'),'',$style_jenisdata);
                     ?>
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-lg-2">
                        <b>Tahun</b>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="tahun_awal" value="2010" class="form-control" />
                    </div>
                    <div class="col-lg-2">
                        Sampai
                    </div>
                    <div class="col-lg-4">
                        <select name="tahun_akhir" class="form-control" required="">
                             <option value="2012">2012</option>
                             <option value="2013">2013</option>
                             <option value="2014">2014</option>
                             <option value="2015">2015</option>
                             <option value="2016">2016</option>
                             <option value="2017">2017</option>
                             <option value="2018">2018</option>
                             <option value="2019">2019</option>
                             <option value="2020">2020</option>
                             <option value="2021">2021</option>
                             <option value="2022">2022</option>
                        </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-lg-12">
                        <b>Model Grafik </b> 
                        <select name="model" class="form-control" required="">
                            <option value="">-- Pilih Model Grafik --</option>
                            <option value="column">Column</option>
                            <option value="bar">Bar</option>
                            <option value="line">Line</option>
                            <option value="pie">Pie</option>
                        </select>
                    </div>
                 </div>
                
                <div class="form-group well">
                    <div class="col-lg-12">
                        <input type="submit" id="simpanx" value="Tampilkan Grafik" class="btn btn-primary" /> 
                    </div>
                </div>
                
            </form>
            
        </div>
        
        <!-- Tampil Grafik ------>
        <div class="col-lg-8">
            <h4 class="text-danger"><?php echo $title;?></h4>
            <hr> 
            
                 <div id="chart_div"></div>
            
        </div>
                                    
</div>
</div>
<P>
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

