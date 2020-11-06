<legend>Bidang/ Urusan</legend>

<?php echo $message;?>
<P>
<P>
 
<table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Bidang/ Urusan</th>
            <?php if($this->session->userdata("level") == "Admin"){ ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php 
    $no=1; 
    foreach($bidang as $row) { ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->nama_bidang;?></td>
        <?php if($this->session->userdata("level") == "Admin"){ ?>
        <td><a href="<?php echo site_url('bidang_urusan/edit/'.$row->id);?>" title="EDIT"><i class="glyphicon glyphicon-edit"></i></a>&emsp;<a href="#" class="hapus" kode="<?php echo $row->id;?>" title="HAPUS">
            <i class="glyphicon glyphicon-trash"></i></a></td>
        <?php } ?>
    </tr>
    <?php $no++; }?>
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
                url:"<?php echo site_url('bidang_urusan/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('bidang_urusan/bidang/delete_success');?>";
                }
            });
        });
    });
    
</script>
