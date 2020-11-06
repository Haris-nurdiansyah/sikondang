<legend>Data Statistik User</legend>
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
        </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
        foreach($simpatik as $row){
    ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row->nama_bidang;?></td>
            <td><?php echo $row->jenis_data;?></td>
            <td><?php echo $row->tahun;?></td>
            <td><?php echo $row->nama_wilayah;?></td>
            <td><?php echo $row->jumlah;?></td>
            <td><?php echo $row->satuan;?></td>
            <td><?php echo $row->sumber_data;?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>