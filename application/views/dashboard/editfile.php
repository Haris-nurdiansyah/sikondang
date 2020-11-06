<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php
    if(isset($error)){
        echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".$error."</div>";
    }
?>
<ul class="nav nav-tabs">
    <li class="<?php if(!isset($error)){if(!isset($upload)){echo 'active'; }}if(!isset($upload)){if(!isset($error)){echo ''; }} ?>"><a href="#edit_detail" data-toggle="tab">Detail File</a></li>
    <li class="<?php if(isset($error)){if(isset($upload)){echo 'active'; }elseif(!isset($upload)){echo 'active'; }}if(isset($upload)){if(isset($error)){echo 'active'; }elseif(!isset($error)){echo 'active'; }} ?>"><a href="#edit_file" data-toggle="tab">File</a></li>
</ul>

<div class="tab-content">
    <div id="edit_detail" class="tab-pane fade <?php if(!isset($error)){if(!isset($upload)){ echo'in active'; }}if(!isset($upload)){if(!isset($error)){ echo'in active'; }} ?>">
        <br>
        <?php foreach($file as $f){ ?>
        <form action="<?php echo base_url().'dashboard/edit_upload/'.$this->uri->segment("3"); ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-3 control-label">Nama File</label>
                <div class="col-lg-5">
                    <input type="hidden" name="id_upload" value="<?php echo $this->uri->segment('3'); ?>">
                    <input type="text" name="nama_file" class="form-control" value="<?php echo $f->nama_file; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Kategori File</label>
                <div class="col-lg-5">
                    <select name="kategori" class="form-control">
                        <option value="1" <?php if($f->kategori == "1"){echo "selected"; } ?>>KSDA</option>
                        <option value="2" <?php if($f->kategori == "2"){echo "selected"; } ?>>PDRB Kecamatan</option>
                        <option value="3" <?php if($f->kategori == "3"){echo "selected"; } ?>>PDRB Tahunan</option>
                        <option value="4" <?php if($f->kategori == "4"){echo "selected"; } ?>>PDRB Triwulanan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Tahun File</label>
                <div class="col-lg-5">
                    <input type="number" name="tahun_file" class="form-control" value="<?php echo $f->tahun_file; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Status File</label>
                <div class="col-lg-5">
                    <select name="status" class="form-control">
                        <option value="0" <?php if($f->status == "0"){echo "selected"; } ?>>Tidak Valid</option>
                        <option value="1" <?php if($f->status == "1"){echo "selected"; } ?>>Valid</option>
                    </select>
                </div>
            </div>
            <div class="form-group well">
                <div class="col-lg-5">
                    <button class="btn btn-primary" type="submit" name="submit"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
                    <a href="<?php echo site_url('upload/file');?>" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
    <div class="tab-pane fade <?php if(isset($error)){if(isset($upload)){echo 'in active'; }elseif(!isset($upload)){echo 'in active'; }}if(isset($upload)){if(isset($error)){echo 'in active'; }elseif(!isset($error)){echo 'in active'; }} ?>" id="edit_file">
        <br>
        <b>File Sekarang:</b>
        <br>
        <?php
            if($f->kategori == "1"){
                echo "<a href='".base_url()."download_files/KSDA/".$f->file."' target='_blank'>".$f->nama_file."</a>";
            }
            elseif($f->kategori == "2"){
                echo "<a href='".base_url()."download_files/PDRB_Kecamatan/".$f->file."' target='_blank'>".$f->nama_file."</a>";
            }
            elseif($f->kategori == "3"){
                echo "<a href='".base_url()."download_files/PDRB_Tahunan/".$f->file."' target='_blank'>".$f->nama_file."</a>";
            }
            elseif($f->kategori == "4"){
                echo "<a href='".base_url()."download_files/PDRB_Triwulanan/".$f->file."' target='_blank'>".$f->nama_file."</a>";
            }
        ?>
        <br><br>
        
        <form action="<?php echo base_url().'dashboard/edit_upload/'.$this->uri->segment("3"); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label><strong>Pilih File Baru</strong></label>
                <input type="file" name="file" class="form-control" style="height:auto" accept=".pdf" required>
            </div>
            <div class="form-group well">
                <div class="col-lg-5">
                    <button class="btn btn-primary" type="submit" name="submit_file"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
                    <a href="<?php echo site_url('upload/file');?>" class="btn btn-default">Kembali</a>
                </div>
                <br><br>
            </div>
        </form>
    </div>
</div>