<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label class="col-lg-3 control-label">Jenis Data </label>
        <div class="col-lg-9">
            <input type="text" name="nama" class="form-control" placeholder="Jenis Data ..." required="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Bidang/ Urusan </label>
        <div class="col-lg-4">
            <?php
                 $style_bidang='class="form-control input-sm" id="id_bidang" required="" onchange="tampilJenisdata()" ';
                 echo form_dropdown('bidang',$q_bidang,'',$style_bidang);
            ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Parent Jenis Data </label>
        <div class="col-lg-4">
            <?php
                 $style_jenis='class="form-control input-sm" id="id_jenisdata" ';
                 //echo form_dropdown('jenisdata',$q_parent,'',$style_jenis);
                 echo form_dropdown("jenisdata",array(''=>'- Pilih Jenis Data -'),'',$style_jenis);
            ?>
        </div>
    </div>
            
    <div class="form-group well">
        <div class="col-lg-5">
            <button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('jenis_data/jenisdata');?>" class="btn btn-default">Kembali</a>
        </div>
    </div>
</form>

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
 