<legend><?php echo $title;?></legend>
<?php
    echo $message;

    if(isset($error)){
?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo $error; ?>
</div>
<?php } ?>

<form class="form-horizontal" action="<?php echo base_url().'dashboard/tambahfile'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama File</label>
        <div class="col-lg-5">
            <input type="text" name="nama_file" class="form-control" placeholder="Nama File" value="<?php if(isset($error)){echo $nama_file; } ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kategori File</label>
        <div class="col-lg-5">
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('username'); ?>">
            <select name="kategori" class="form-control" onchange="change(this)">
                <option value="1" <?php if(isset($error)){if($kategori == "1"){echo "selected"; }} ?>>KSDA</option>
                <option value="2" <?php if(isset($error)){if($kategori == "2"){echo "selected"; }} ?>>PDRB Kecamatan</option>
                <option value="3" <?php if(isset($error)){if($kategori == "3"){echo "selected"; }} ?>>PDRB Tahunan</option>
                <option value="4" <?php if(isset($error)){if($kategori == "4"){echo "selected"; }} ?>>PDRB Triwulan</option>
            </select>
        </div>
    </div>
    
    <div class="form-group" id="tahun_file" style="<?php if(isset($error)){if($kategori == '2' OR $kategori == '3'){echo 'display:none'; }} ?>">
        <label class="col-lg-3 control-label">Tahun File</label>
        <div class="col-lg-5">
            <input type="number" name="tahun_file" id="tahunFileBox" class="form-control" placeholder="Tahun File" value="<?php if(isset($error)){echo $tahun_file; } ?>" required>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Input File</label>
        <div class="col-lg-5">
            <input type="file" name="file" class="form-control" placeholder="Input File" style="height:auto" accept=".pdf" required>
        </div>
    </div>
    
    <div class="form-group well">
        <div class="col-lg-5">
            <button class="btn btn-primary" type="submit" name="submit"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('upload/file');?>" class="btn btn-default">Kembali</a>
        </div>
    </div>
</form>

<script>
    function change(obj){
        var selectBox = obj;
        var selected = selectBox.options[selectBox.selectedIndex].value;
        var tahunFile = document.getElementById("tahun_file");
        var tahunFileBox = document.getElementById("tahunFileBox");

        if(selected == "2" || selected == "3"){
            tahunFile.style.display = "none";
            tahunFileBox.required = false;
        }
        else{
            tahunFile.style.display = "block";
            tahunFileBox.required = true;
        }
    }
</script>