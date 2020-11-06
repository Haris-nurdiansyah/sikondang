<style type="text/css">
    .form1{ width:300px; height: 200px; margin-top: 60px;}
    .form1 label{ width:100px; float:left;}
</style>

<form action="<?php echo base_url();?>download/submit_daftar" method="post" class="form1">
    <h3>Register User Download</h3>
    <label>Nama</label><input type="text" name="nama" required="" > </P>
    <label><b>E-mail</b></label><input type="email" name="email" required=""> </P>
    <label></label><input type="submit" name="sbm" value="Daftar" class="btn btn-primary">
</form>

