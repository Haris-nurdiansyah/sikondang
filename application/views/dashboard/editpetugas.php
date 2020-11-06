<legend><?php echo $title;?></legend>
<?php echo $message;?>
<?php echo validation_errors();?>
<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama User</label>
        <div class="col-lg-5">
            <input type="hidden" name="id" value="<?php echo $petugas['id_user'];?>">
            <input type="text" name="user" value="<?php echo $petugas['nama'];?>" readonly="readonly" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama Petugas</label>
        <div class="col-lg-5">
            <input type="text" name="nama" value="<?php echo $petugas['nama'];?>" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Level Petugas</label>
        <div class="col-lg-3">
            <select name="level" class="form-control" required="">
                <option value="<?php echo $petugas['level'];?>"><?php echo $petugas['level'];?></option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
    </div>
    
    <div class="form-group well">
        <div class="col-lg-5">
            <button id="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
            <a href="<?php echo site_url('dashboard/petugas');?>" class="btn btn-default">Kembali</a>
        </div>
    </div>
</form>