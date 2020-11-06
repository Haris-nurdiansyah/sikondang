<?php
    $no = 1;
    $json["data"] = array();
    foreach($simpatik as $s){
        $data["no"] = $no++.".";
        $data["tahun"] = $s->tahun;
        $data["jumlah"] = $s->jumlah;
        $data["satuan"] = $s->satuan;
        $data["sumber_data"] = $s->sumber_data;
        $data["ket"] = $s->ket;

        array_push($json["data"], $data);
    }

    $data = json_encode($json);
    file_put_contents("data.txt", $data);
?>
<h3 class="modal-title" style="color:red">Bidang/Urusan : <span id="modTitle"><?php foreach($bidang as $b){echo $b->nama_bidang; } ?></span></h3>
<h4 class="text-info">Jenis Data : <span id="modData"><?php echo $jenisdata; ?></span></h4>