<h2><strong>Data Sistem Pelaporan dan Statistik Tahun  <?php echo $tahun; ?></strong></h2>
<h3><strong><?php echo $title;?></strong></h3>
<BR>
<table class="table table-striped" cellpadding="5" cellspacing="0" border="0">
    <tr>
        <th>No</th>
        <th>Jenis Data</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Sumber Data</th>
    </tr>
    <?php 
        if(!empty($q_simpatik)){
            $no=0;
            foreach($q_simpatik as $row){ 
                $no=$no + 1;
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->jenis_data;?></td>
        <td>
            <?php
                $length = strlen($row->jumlah);

                if($length == 4){
                    $sub1 = substr($row->jumlah,0,1);
                    $sub2 = substr($row->jumlah,1);

                    echo $sub1.".".$sub2;
                }
                else if($length == 5){
                    $sub1 = substr($row->jumlah,0,2);
                    $sub2 = substr($row->jumlah,2);

                    echo $sub1.".".$sub2;
                }
                else if($length == 6){
                    $sub1 = substr($row->jumlah,0,3);
                    $sub2 = substr($row->jumlah,3);

                    echo $sub1.".".$sub2;
                }
                else{
                    echo $row->jumlah;
                }
            ?>
        </td>
        <td><?php echo $row->satuan;?></td>
        <td><?php echo $row->sumber_data;?></td>
    </tr>
    <?php } 
     }else{
        echo "Tidak ada data";
     }?>
</table>
