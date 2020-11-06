<legend>Jenis Data</legend>

<?php echo $message;?>
<P>
<P> 
 
<table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Data</th>
            <?php if($this->session->userdata("level") == "Admin"){ ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
 
        <?php
        $no=1;
        foreach($jenis as $row){ ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->jenis_data;?></td>
        <?php if($this->session->userdata("level") == "Admin"){ ?>
        <td><a href="<?php echo site_url('jenis_data/edit/'.$row->id);?>" title="EDIT"><i class="glyphicon glyphicon-edit"></i></a> &emsp; <a href="#" class="hapus" kode="<?php echo $row->id;?>" title="HAPUS"><i class="glyphicon glyphicon-trash"></i></a></td>
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
                url:"<?php echo site_url('jenis_data/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('jenis_data/jenisdata/delete_success');?>";
                }
            });
        });
    });
    
</script>
