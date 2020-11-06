<option value="0">Pilih Data</option>
<?php
    foreach($data as $d){
?>
    <option value="<?php echo $d->id; ?>"><?php echo $d->jenis_data; ?></option>
<?php } ?>