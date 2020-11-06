<legend>Data Sikondang</legend>
<?php echo $message;?>
<P>
<P>

<table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Bidang/ Urusan</th>
            <th>Jenis Data</th>
            <th>Tahun</th>
            <th>Wilayah</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Sumber Data</th>
            <?php if($this->session->userdata("level") == "Admin"){ ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php
        if($this->uri->segment("3") == "add_success"){
            $no = $this->uri->segment("4") + 1;
        }
        elseif($this->uri->segment("3") == "delete_success"){
            $no = $this->uri->segment("4") + 1;
        }
        else{
            $no = $this->uri->segment("3") + 1;
        }
        foreach($simpatik as $row){ ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row->nama_bidang;?></td>
            <td><?php echo $row->jenis_data;?></td>
            <td><?php echo $row->tahun;?></td>
            <td><?php echo $row->nama_wilayah;?></td>
            <td><?php echo $row->jumlah;?></td>
            <td><?php echo $row->satuan;?></td>
            <td><?php echo $row->sumber_data;?></td>
            <?php if($this->session->userdata("level") == "Admin"){ ?>
            <td><a href="<?php echo site_url('simpatik/edit/'.$row->id_simpatik.'/'.$row->bidang_urusan);?>" title="EDIT"><i class="glyphicon glyphicon-edit"></i></a>&emsp;<a href="#" class="hapus" kode="<?php echo $row->id_simpatik;?>" title="HAPUS"><i class="glyphicon glyphicon-trash"></i></a></td>
            <?php } ?>
        </tr>
    <?php $no++; }?>
    </tbody>
</table>
<br>
<?php echo $this->pagination->create_links(); ?>

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
                url:"<?php echo site_url('simpatik/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('simpatik/simpatik/delete_success');?>";
                }
            });
        });
    });
    
</script>
