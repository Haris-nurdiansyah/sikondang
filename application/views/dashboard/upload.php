<legend>Tambah File</legend>
<a href="<?php echo site_url('dashboard/tambahfile');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<br><br>
<?php echo $message;?>
<table class="table table-bordered table-striped table-hover" id="table-datatable">
 
    <thead>
        <tr>
            <th>No.</th>
            <th>ID Petugas</th>
            <th>Nama File</th>
            <th>Kategori</th>
            <th>Tahun File</th>
            <th>Status</th>
            <?php if($this->session->userdata("level") == "Admin"){ ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
    </thead>
    <?php $no=1; foreach($file as $row) { ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->id_user;?></td>
        <td><?php echo $row->nama_file;?></td>
        <td>
            <?php
                if($row->kategori == "1"){
                    echo "KSDA";
                }
                elseif($row->kategori == "2"){
                    echo "PDRB Kecamatan";
                }
                elseif($row->kategori == "3"){
                    echo "PDRB Tahunan";
                }
                elseif($row->kategori == "4"){
                    echo "PDRB Triwulanan";
                }
            ?>
        </td>
        <td><?php echo $row->tahun_file;?></td>
        <td>
            <?php
                if($this->session->userdata("username") == "user"){
                    if($row->id_user == $this->session->userdata("username")){
                        if($row->status == "0"){
                            echo "Tidak Valid";
                        }
                        else{
                            echo "Valid";
                        }
                    }
                    else{
                        echo "";
                    }
                }
                else{
                    if($row->status == "0"){
                        echo "Tidak Valid";
                    }
                    else{
                        echo "Valid";
                    }
                }
            ?>
        </td>
        <?php if($this->session->userdata("level") == "Admin"){ ?>
        <td><a href="<?php echo site_url('dashboard/edit_upload/'.$row->id_upload);?>"><i class="glyphicon glyphicon-edit"></i></a> &emsp; <a href="#" class="hapus" kode="<?php echo $row->id_upload;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
        <?php } ?>
    </tr>
    <?php $no++; } ?>
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
                url:"<?php echo site_url('dashboard/hapus_file');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('upload/file/delete_success');?>";
                }
            });
        });
    });
</script>