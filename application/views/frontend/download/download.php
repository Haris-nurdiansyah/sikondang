    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"><h4><i class="fa fa-file"></i> Pilih Berkas</h4></div>
                <div class="panel-body">
                    <form action="<?php echo base_url().'download'; ?>" method="post">
                        <div class="form-group" id="berkas_div">
                            <label>Berkas</label>
                            <select name="berkas" id="berkas" class="form-control">
                                <option value="1" <?php if(isset($berkas)){if($berkas == "1"){echo "selected"; }} ?>>KSDA</option>
                                <option value="2" <?php if(isset($berkas)){if($berkas == "2"){echo "selected"; }} ?>>PDRB</option>
                            </select>
                        </div>
                        <div class="form-group" id="pdrb_div" style="<?php if(!isset($jenis)){echo 'display:none'; } ?>">
                            <label>Jenis PDRB</label>
                            <select name="jenis_pdrb" id="jenisPDRB" class="form-control">
                                <option value="1" <?php if(isset($jenis)){if($jenis == "1"){echo "selected"; }} ?>>PDRB Kecamatan</option>
                                <option value="2" <?php if(isset($jenis)){if($jenis == "2"){echo "selected"; }} ?>>PDRB Tahunan</option>
                                <option value="3" <?php if(isset($jenis)){if($jenis == "3"){echo "selected"; }} ?>>PDRB Triwulan</option>
                            </select>
                        </div>
                        <input type="submit" name="submit" value="Lihat Berkas" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>

        <?php if(isset($active)){ ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-success"><i class="fa fa-download"></i> Unduh Berkas</h4>
                </div>
                <div class="panel-body">
                    <?php if(isset($berkas)){if($berkas == "1"){ ?>
                    <ul>
                        <li><strong>KSDA</strong>
                            <?php if($nr_ksda_2014 >= 1){ ?>
                            <ul>
                                KSDA 2014
                                <?php
                                    foreach($ksda_2014 as $k14){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k14->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k14->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2015 >= 1){ ?>
                            <ul>
                                KSDA 2015
                                <?php
                                    foreach($ksda_2015 as $k15){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k15->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k15->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2016 >= 1){ ?>
                            <ul>
                                KSDA 2016
                                <?php
                                    foreach($ksda_2016 as $k16){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k16->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k16->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2017 >= 1){ ?>
                            <ul>
                                KSDA 2017
                                <?php
                                    foreach($ksda_2017 as $k17){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k17->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k17->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2018 >= 1){ ?>
                            <ul>
                                KSDA 2018
                                <?php
                                    foreach($ksda_2018 as $k18){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k18->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k18->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2019 >= 1){ ?>
                            <ul>
                                KSDA 2019
                                <?php
                                    foreach($ksda_2019 as $k19){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k19->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k19->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_ksda_2020 >= 1){ ?>
                            <ul>
                                KSDA 2020
                                <?php
                                    foreach($ksda_2020 as $k20){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $k20->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $k20->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php }elseif($berkas == "2"){if($jenis == "1"){ ?>
                            
                        <li><strong>PDRB Kecamatan</strong>
                            <?php
                                if($nr_pdrb_kec >= 1){
                            ?>
                            <ul>
                                <?php
                                    foreach($pdrb_kec as $pdk){
                                ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdk->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdk->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php }elseif($jenis == "2"){ ?>
                            
                        <li><strong>PDRB Tahunan</strong>
                            <?php
                                if($nr_pdrb_tahunan >= 1){
                                    foreach($pdrb_tahunan as $pdt){ 
                            ?>
                            <ul>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt->nama_file; ?></a>
                                </li>
                            </ul>
                            <?php }} ?>
                        </li>
                        <?php }elseif($jenis == "3"){ ?>
                            
                        <li><strong>PDRB Triwulan</strong>
                            <?php if($nr_pdrb_tri_2014 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2014
                                <?php foreach($pdrb_tri_2014 as $pdt14){ ?> 
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt14->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt14->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2015 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2015
                                <?php foreach($pdrb_tri_2015 as $pdt15){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt15->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt15->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2016 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2016
                                <?php foreach($pdrb_tri_2016 as $pdt16){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt16->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt16->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2017 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2017
                                <?php foreach($pdrb_tri_2017 as $pdt17){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt17->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt17->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2018 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2018
                                <?php foreach($pdrb_tri_2018 as $pdt18){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt18->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt18->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2019 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2019
                                <?php foreach($pdrb_tri_2019 as $pdt19){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt19->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt19->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                            <?php if($nr_pdrb_tri_2020 >= 1){ ?>
                            <ul>
                                PDRB Triwulan 2020
                                <?php foreach($pdrb_tri_2020 as $pdt20){ ?>
                                <li>
                                    <a href="#" data-id_upload="<?php echo $pdt20->id_upload; ?>" data-toggle="modal" data-target="#modalPreview"><?php echo $pdt20->nama_file; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php }} ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="modal fade" id="modalPreview">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                    <h4 class="modal-title">Preview PDF</h4>
                </div>
                <div class="modal-body" id="bodyPreview"></div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $("#modalPreview").on("show.bs.modal", function(event){
            var button = $(event.relatedTarget);
            var id_upload = button.data("id_upload");

            $.ajax({
                type: "POST",
                url: "download/detail_preview",
                data: "id_upload="+id_upload,
                success: function(response){
                    $("#bodyPreview").html(response);
                }
            })
        })
    </script>
    <script>
        $(document).ready(function (){
            $("#berkas").change(function (){
                var berkas = $(this).val();

                if(berkas == "2"){
                    document.getElementById("pdrb_div").style.display = "block";
                }
                else{
                    document.getElementById("pdrb_div").style.display = "none";
                }  
            })
        })
    </script>