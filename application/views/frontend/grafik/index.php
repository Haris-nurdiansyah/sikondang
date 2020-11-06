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
                            <select name="tahun_awal" class="form-control" required="">
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
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
                            <select name="model" class="form-control" id="model" required="">
                                <option value="">-- Pilih Model Grafik --</option>
                                <option value="bar">Column</option>
                                <option value="horizontalBar">Bar</option>
                                <option value="line">Line</option>
                                <option value="pie">Pie</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-info"><i class="fa fa-chart-bar"></i> Tampilkan Grafik</button> &nbsp;
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>  
    
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