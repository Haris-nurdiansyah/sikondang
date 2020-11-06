<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label class="col-lg-3 control-label"></label>
        <div class="col-lg-5">
            <input type="hidden" name="id" value="<?php echo $bidang['id'];?>">
        </div>
    </div>
      
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama Bidang/ Urusan</label>
        <div class="col-lg-9">
            <input type="text" name="nama" value="<?php echo $bidang['nama_bidang'];?>" class="form-control">
        </div>
    </div>
    
    <div class="form-group well">
        <div class="col-lg-5">
            <button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('bidang_urusan/bidang');?>" class="btn btn-default">Kembali</a>
        </div>
    </div>
    
</form>

