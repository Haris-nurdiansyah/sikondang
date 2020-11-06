<legend>Validasi Data Statistik</legend>
<?php echo $message; ?>
<table class="table table-striped table-bordered table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Bidang / Urusan</th>
            <th>Jenis Data</th>
            <th>Tahun</th>
            <th>Wilayah</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Sumber Data</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($simpatik as $row){
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row->nama_bidang;?></td>
            <td><?php echo $row->jenis_data;?></td>
            <td><?php echo $row->tahun;?></td>
            <td><?php echo $row->nama_wilayah;?></td>
            <td><?php echo $row->jumlah;?></td>
            <td><?php echo $row->satuan;?></td>
            <td><?php echo $row->sumber_data;?></td>

            <td><a href="<?php echo site_url('simpatik/edit_validasi/'.$row->id_simpatik_user.'/'.$row->bidang_urusan);?>" title="EDIT"><i class="glyphicon glyphicon-edit"></i></a>&emsp;<a href="#" class="hapus" kode="<?php echo $row->id_simpatik_user;?>" title="HAPUS"><i class="glyphicon glyphicon-trash"></i></a></td>
        </tr>
        <?php $no++; ?>
        <?php } ?>
    </tbody>
</table>

<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('simpatik/hapus_simpatik_user');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('simpatik/validasi/delete_success');?>";
                }
            });
        });
    });
    
</script>