<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label class="col-lg-3 control-label"></label>
        <div class="col-lg-5">
            <input type="hidden" name="id" value="<?php echo $jenis['id'];?>">
        </div>
    </div>
      
    <div class="form-group">
        <label class="col-lg-3 control-label">Jenis data</label>
        <div class="col-lg-9">
            <input type="text" name="nama" value="<?php echo $jenis['jenis_data'];?>" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Bidang/ Urusan </label>
        <div class="col-lg-4">
            <?php
                 $bidang=$jenis['id_bidang'];
                 $style_bidang='class="form-control input-sm" id="id" required="" ';
                 echo form_dropdown('bidang',$q_bidang,$bidang,$style_bidang);
            ?>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Parent Id </label>
        <div class="col-lg-4">
            <?php
                 $parent=$jenis['id_parent'];
                 $style_jenis='class="form-control input-sm" id="idx" ';
                 echo form_dropdown('jenisdata',$q_parent,$parent,$style_jenis);
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

