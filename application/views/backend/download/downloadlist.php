<legend>User Download List</legend>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Kontrol Panel Grafik</h3>
    </div>
    <div class="panel-body">
        <div class="chart-responsive">
            <canvas id="chart" height="150"></canvas>
        </div>
    </div>
</div>
<br>

<table class="table table-bordered table-striped table-hover" id="table-datatable">
 <thead>
        <tr>
            <th>No</th>
            <th>Username/ Email</th>
            <th>Nama File</th>
            <th>Tgl Download</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $no=0;
        foreach($q_download as $row){ $no++;?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row->email; ?></td>
            <td>
                <?php
                    if(substr($row->nama_file,0,3) == "PDF"){
                        echo $row->nama_file;
                    }
                    elseif(substr($row->nama_file,0,5) == "Cetak"){
                        echo $row->nama_file;
                    }
                    elseif(substr($row->nama_file,0,4) == "KSDA"){
                        echo "<a href='".base_url()."download_files/KSDA/".$row->file."' target='_blank'>".$row->nama_file."</a>";
                    }
                    elseif(substr($row->nama_file,0,8) == "PDRB Kec"){
                        echo "<a href='".base_url()."download_files/PDRB_Kecamatan/".$row->file."' target='_blank'>".$row->nama_file."</a>";
                    }
                    elseif(substr($row->nama_file,0,8) == "PDRB Tah"){
                        echo "<a href='".base_url()."download_files/PDRB_Tahunan/".$row->file."' target='_blank'>".$row->nama_file."</a>";
                    }
                    elseif(substr($row->nama_file,0,8) == "PDRB Tri"){
                        echo "<a href='".base_url()."download_files/PDRB_Triwulanan/".$row->file."' target='_blank'>".$row->nama_file."</a>";
                    }
                ?>
            </td>
            <td><?php echo $row->created_date; ?></td>
            <td><a href="<?php echo base_url();?>download/hapus/<?php  echo $row->id;?>" onclick="return confirm('Anda yakin mau hapus data ini?')"> Delete</a></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
</table>

<script>
    var canvas = document.getElementById("chart").getContext("2d");
    var ksda = "<?php echo $ksda; ?>";
    var pdrb_kec = "<?php echo $pdrb_kec; ?>";
    var pdrb_tahun = "<?php echo $pdrb_tahun; ?>";
    var pdrb_tri = "<?php echo $pdrb_tri; ?>";
    var pdf = "<?php echo $pdf; ?>";
    var grafik = "<?php echo $grafik; ?>";

    var myChart = new Chart(canvas, {
        type: "bar",
        data: {
            labels: ["KSDA", "PDRB Kecamatan", "PDRB Tahunan", "PDRB Triwulanan", "PDF Bidang", "Cetak Grafik"],
            datasets: [{
                label: "Unduhan / Cetak",
                data: [ksda, pdrb_kec, pdrb_tahun, pdrb_tri, pdf, grafik],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                labels: {
                    render: "value"
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>