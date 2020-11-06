<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
        <label class="col-lg-3 control-label"></label>
        <div class="col-lg-5">
            <input type="hidden" name="id_simpatik_user" value="<?php echo $simpatik['id_simpatik_user'];?>">
        </div>
  </div>  
  <div class="form-group">
        <label class="col-lg-3 control-label">Bidang/ Urusan </label>
        <div class="col-lg-4">
            <?php
                 $style_bidang='class="form-control input-sm" id="id_bidang" onChange="tampilJenis()" required="" ';
                 echo form_dropdown('id_bidang',$q_bidang,$bidang,$style_bidang);
            ?>
        </div>
  </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jenis Data</label>
        <div class="col-lg-4">
             <?php
		$style_jenis = 'class="form-control input-sm" id="id_jenis" required="" ';
		echo form_dropdown("id_jenis",$q_jenis,$jenis,$style_jenis);
             ?>
        </div>
  </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Tahun </label>
        <div class="col-lg-3">
            <select name="tahun" class="form-control">
                <option value="<?php echo $simpatik['tahun']; ?>"><?php echo $simpatik['tahun']; ?></option>
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
        <label class="col-lg-3 control-label">Triwulan </label>
        <div class="col-lg-3">
            <?php 
            $trw=$simpatik['triwulan']; 
            switch($trw){
               case 1:
                    $triwulan="Triwulan 1";
                    break;
               case 2:
                    $triwulan="Triwulan 2";
                    break;
               case 3:
                    $triwulan="Triwulan 3";
                    break;
               case 4:
                    $triwulan="Triwulan 4";
                    break;
            }
            ?>
            <select name="triwulan" class="form-control">
                <option value="<?php echo $simpatik['triwulan']; ?>"><?php echo $triwulan;?></option>
                <option value="1">Triwulan 1 </option>
                <option value="2">Triwulan 2 </option>
                <option value="3">Triwulan 3 </option>
                <option value="4">Triwulan 4 </option>
            </select>
        </div>
   </div>
   <div class="form-group">
        <label class="col-lg-3 control-label">Wilayah/ Kecamatan</label>
        <div class="col-lg-3">
           <?php
                 $style_wilayah='class="form-control input-sm" id="id_kec" required="" ';
                 echo form_dropdown('wilayah',$q_wilayah,$simpatik['wilayah'],$style_wilayah);
            ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah </label>
        <div class="col-lg-4">
            <input type="text" name="jumlah" class="form-control" value="<?php echo $simpatik['jumlah']; ?>">
        </div>
    </div> 
    <div class="form-group">
        <label class="col-lg-3 control-label">Satuan </label>
        <div class="col-lg-3">
            <input type="text" name="satuan" class="form-control" value="<?php echo $simpatik['satuan']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Sumber Data </label>
        <div class="col-lg-4">
            <input type="text" name="sumberdata" class="form-control" value="<?php echo $simpatik['sumber_data']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Status Validasi </label>
        <div class="col-lg-3">
            <select name="validasi" class="form-control">
                <option value="0">Tidak Valid</option>
                <option value="1">Valid</option>
            </select>
        </div>
   </div> 
    <div class="form-group well">
        <div class="col-lg-5">
            <button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('simpatik/validasi');?>" class="btn btn-default">Lihat Data</a>
        </div>
    </div>
</form>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.chained.min.js"></script>
<script type="text/javascript">
    
    function tampilJenis()
    { 
         var idbidang = document.getElementById("id_bidang").value;
         //alert(idbidang)
	 $.ajax({
		 url:"<?php echo base_url();?>simpatik/pilih_jenis/"+idbidang+" ",
		 success: function(response){
		 $("#id_jenis").html(response);
		 },
                         
		 dataType:"html"
	 });
         
	 return false;
    }
    
</script>

