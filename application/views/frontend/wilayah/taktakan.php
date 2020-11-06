<h3 class="text-center text-danger"><strong><?php echo $title;?></strong></h3>
<BR>

<div class=" container" style="background-color: #FFF; border-radius:25px;">
    <div class="row" style="padding: 10px;">
        <div class="col-lg-1">
            <a href="<?php echo base_url();?>">
            <button class="btn btn-danger">
                << Back
            </button>
            </a>
        </div>
        <form method="post" action="<?php echo base_url();?>home/submit_form/<?php echo $title;?>" class="form-1" />
            <div class="col-lg-3">
                <label class="form-control text-center">Bidang Urusan</label>
                <input type="hidden" name="wilayah" value="3">
                <?php
                    $style_bidang='class="form-control input-sm" id="id_bidang" onChange="" required="" ';
                    echo form_dropdown('bidang',$q_bidang,$bidang,$style_bidang);
                ?>
            </div>
            <div class="col-lg-3">
                <label class="form-control text-center">Tahun</label>
                <select name="tahun" class="form-control" id="tahun_bidang" required="">
                    <option value="">-- Pilih Tahun--</option>
                    <option value="2012" <?php if(isset($tahun)){if($tahun == "2012"){echo "selected"; }} ?>>2012</option>
                    <option value="2013" <?php if(isset($tahun)){if($tahun == "2013"){echo "selected"; }} ?>>2013</option>
                    <option value="2014" <?php if(isset($tahun)){if($tahun == "2014"){echo "selected"; }} ?>>2014</option>
                    <option value="2015" <?php if(isset($tahun)){if($tahun == "2015"){echo "selected"; }} ?>>2015</option>
                    <option value="2016" <?php if(isset($tahun)){if($tahun == "2016"){echo "selected"; }} ?>>2016</option>
                    <option value="2017" <?php if(isset($tahun)){if($tahun == "2017"){echo "selected"; }} ?>>2017</option>
                    <option value="2018" <?php if(isset($tahun)){if($tahun == "2018"){echo "selected"; }} ?>>2018</option>
                    <option value="2019" <?php if(isset($tahun)){if($tahun == "2019"){echo "selected"; }} ?>>2019</option>
                    <option value="2020" <?php if(isset($tahun)){if($tahun == "2020"){echo "selected"; }} ?>>2020</option>
                    <option value="2021" <?php if(isset($tahun)){if($tahun == "2021"){echo "selected"; }} ?>>2021</option>
                    <option value="2022" <?php if(isset($tahun)){if($tahun == "2022"){echo "selected"; }} ?>>2022</option>
                </select>
            </div>
            <div class="col-lg-3">
                <label class="form-control text-center">Triwulan</label>
                <select name="triwulan" class="form-control" id="triwulan_bidang" required="">
                    <option value="">-- Pilih Triwulan--</option>
                    <option value="1" <?php if(isset($triwulan)){if($triwulan == "1"){echo "selected"; }} ?>>Triwulan 1 </option>
                    <option value="2" <?php if(isset($triwulan)){if($triwulan == "2"){echo "selected"; }} ?>>Triwulan 2 </option>
                    <option value="3" <?php if(isset($triwulan)){if($triwulan == "3"){echo "selected"; }} ?>>Triwulan 3 </option>
                    <option value="4" <?php if(isset($triwulan)){if($triwulan == "4"){echo "selected"; }} ?>>Triwulan 4 </option>
                </select>
            </div>
            <div class="col-lg-2">
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalPDF" style="display:<?php if(isset($tahun)){echo 'block'; }else{echo 'none'; } ?>">PDF</a>
                </p>
                <input type="submit" name="sbm" value="Cari" id="sbm2" class="form-control btn btn-primary" />
            </div>
        </form>
    </div>

    <P>
    <table class="table table-hover" style="overflow: auto;">
        <div class="row" style="font-weight:bold; background-color: #f5f5f5; padding:10px;">
            <div class="col-lg-1 text-center">
                No
            </div>
            <div class="col-lg-3 text-center">
                Jenis Data
            </div>
            <div class="col-lg-3 text-center">
                Jumlah
            </div>
            <div class="col-lg-2 text-center">
                Satuan
            </div>
            <div class="col-lg-3 text-center">
                Sumber Data
            </div>
        </div>
        <?php 
        if(!empty($q_simpatik)){
            $no=0;
            foreach($q_simpatik as $row){ 
                $no=$no + 1;
         ?>
        <div class="row">
            <div class="col-lg-1 text-center">
                <?php echo $no;?>
            </div>
            <div class="col-lg-3">
               <?php echo $row->jenis_data;?>
            </div>
            <div class="col-lg-3 text-right">
               <?php echo $row->jumlah;?>
            </div>
            <div class="col-lg-2 text-center">
               <?php echo $row->satuan;?>
            </div>
            <div class="col-lg-3">
                <?php echo $row->sumber_data;?>
            </div>
        </div>
        <?php }
        }else{
             echo "<marquee><h4 class='text-danger'> Silahkan Pilih Berdasar Kriteria </h4></marquee>";
        }?>
    </table>

</div>
<br><br>

<?php if(isset($tahun)){ ?>
<div class="modal fade" id="modalPDF">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
                <h4 class="modal-title"><i class="fa fa-download"></i> Unduh Data (PDF)</h4>
            </div>
            <div class="modal-body">
                <form method="post" name="form" id="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anda" required><span id="namaSpan"></span></div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>&emsp;
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Pria" checked>Pria
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Wanita">Wanita
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Usia</label>
                        <input type="number" name="usia" id="usia" class="form-control" placeholder="Usia Anda" required><span id="usiaSpan"></span></div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required><span id="emailSpan"></span></div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan Anda" required><span id="pekerjaanSpan"></span></div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" name="pendidikan" id="pendidikan" class="form-control" placeholder="Pendidikan Anda" required><span id="pendidikanSpan"></span></div>
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" name="keperluan" id="keperluan" class="form-control" placeholder="Keperluan Anda Apa?" required><span id="keperluanSpan"></span></div>
                    <div class="form-group">
                        <label>Apakah ini yang pertama kali membuka aplikasi ini?</label>&emsp;
                        <label class="radio-inline">
                            <input type="radio" name="membuka" value="Ya" checked>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="membuka" value="Tidak">Tidak
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Apakah aplikasi ini dapat membantu anda?</label>&emsp;
                        <label class="radio-inline">
                            <input type="radio" name="membantu" value="Ya" checked>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="membantu" value="Tidak">Tidak
                        </label>
                        <input type="hidden" name="nama_file" value="" id="nama_file">
                        <input type="hidden" name="wilayah" value="<?php echo $wilayah; ?>">
                        <input type="hidden" name="bidang" value="<?php echo $bidang; ?>">
                        <input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
                        <input type="hidden" name="triwulan" value="<?php echo $triwulan; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kritik / Saran</label>
                        <textarea name="saran" id="saran" rows="3" class="form-control" placeholder="Kritik / Saran Anda"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success" id="submit"><i class="fa fa-download"></i> Unduh Data (PDF)</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<script>
    var bidangSel = document.getElementById("id_bidang");
    var bidang = bidangSel.options[bidangSel.selectedIndex].text;

    var tahunSel = document.getElementById("tahun_bidang");
    var tahun = tahunSel.options[tahunSel.selectedIndex].text;

    var triwulanSel = document.getElementById("triwulan_bidang");
    var triwulan = triwulanSel.options[triwulanSel.selectedIndex].text;

    document.getElementById("nama_file").value = "PDF/PDF Tahun " + tahun + "/Bidang " + bidang + " " + triwulan;
</script>
<script>
    $("#submit").click(function () {
        var nama = document.forms["form"]["nama"].value;
        var namaText = document.getElementById("nama");
        var namaSpan = document.getElementById("namaSpan");

        if(nama.trim() == ""){
            namaError = "Nama Tidak Boleh Kosong.";
            namaSpan.innerHTML = namaError;
            namaSpan.style.color = "#a94442";
            namaText.style.border = "2px solid red";
        }
        else{
            namaText.style.border = "2px solid green";
        }

        var gender = document.forms["form"]["gender"].value;
        
        var usia = document.forms["form"]["usia"].value;
        var usiaText = document.getElementById("usia");
        var usiaSpan = document.getElementById("usiaSpan");

        if(usia.trim() == ""){
            usiaError = "Usia Tidak Boleh Kosong.";
            usiaSpan.innerHTML = usiaError;
            usiaSpan.style.color = "#a94442";
            usiaText.style.border = "2px solid red";
        }
        else{
            usiaText.style.border = "2px solid green";
        }

        var email = document.forms["form"]["email"].value;
        var emailText = document.getElementById("email");
        var emailSpan = document.getElementById("emailSpan");

        if(email.trim() == ""){
            emailError = "Email Tidak Boleh Kosong.";
            emailSpan.innerHTML = emailError;
            emailSpan.style.color = "#a94442";
            emailText.style.border = "2px solid red";
        }
        else{
            emailText.style.border = "2px solid green";
        }

        var pekerjaan = document.forms["form"]["pekerjaan"].value;
        var pekerjaanText = document.getElementById("pekerjaan");
        var pekerjaanSpan = document.getElementById("pekerjaanSpan");

        if(pekerjaan.trim() == ""){
            pekerjaanError = "Pekerjaan Tidak Boleh Kosong.";
            pekerjaanSpan.innerHTML = pekerjaanError;
            pekerjaanSpan.style.color = "#a94442";
            pekerjaanText.style.border = "2px solid red";
        }
        else{
            pekerjaanText.style.border = "2px solid green";
        }

        var pendidikan = document.forms["form"]["pendidikan"].value;
        var pendidikanText = document.getElementById("pendidikan");
        var pendidikanSpan = document.getElementById("pendidikanSpan");

        if(pendidikan.trim() == ""){
            pendidikanError = "Pendidikan Tidak Boleh Kosong.";
            pendidikanSpan.innerHTML = pendidikanError;
            pendidikanSpan.style.color = "#a94442";
            pendidikanText.style.border = "2px solid red";
        }
        else{
            pendidikanText.style.border = "2px solid green";
        }

        var keperluan = document.forms["form"]["keperluan"].value;
        var keperluanText = document.getElementById("keperluan");
        var keperluanSpan = document.getElementById("keperluanSpan");

        if(keperluan.trim() == ""){
            keperluanError = "Keperluan Tidak Boleh Kosong.";
            keperluanSpan.innerHTML = keperluanError;
            keperluanSpan.style.color = "#a94442";
            keperluanText.style.border = "2px solid red";
        }
        else{
            keperluanText.style.border = "2px solid green";
        }

        var membuka = document.forms["form"]["membuka"].value;
        var membantu = document.forms["form"]["membantu"].value;

        var saran = document.forms["form"]["saran"].value;
        var nama_file = document.forms["form"]["nama_file"].value;
        var wilayah = document.forms["form"]["wilayah"].value;
        var bidang = document.forms["form"]["bidang"].value;
        var tahun = document.forms["form"]["tahun"].value;
        var triwulan = document.forms["form"]["triwulan"].value;

        if(nama.trim() !== "" && usia.trim() !== "" && email.trim() !== "" && pekerjaan.trim() !== "" && pendidikan.trim() !== "" && keperluan.trim() !== ""){
            $.ajax({
                type: "POST",
                url: "../submit_form_pdf",
                data: {"nama": nama, "gender": gender, "usia": usia, "email": email, "pekerjaan": pekerjaan, "pendidikan": pendidikan, "keperluan": keperluan, "membuka": membuka, "membantu": membantu, "saran": saran, "nama_file": nama_file},
                success: function(response){
                    if(response == "OK"){
                        document.getElementById("nama").value = "";
                        document.getElementById("nama").style.border = "";
                        document.getElementById("usia").value = "";
                        document.getElementById("usia").style.border = "";
                        document.getElementById("email").value = "";
                        document.getElementById("email").style.border = "";
                        document.getElementById("pekerjaan").value = "";
                        document.getElementById("pekerjaan").style.border = "";
                        document.getElementById("pendidikan").value = "";
                        document.getElementById("pendidikan").style.border = "";
                        document.getElementById("keperluan").value = "";
                        document.getElementById("keperluan").style.border = "";
                        document.getElementById("saran").value = "";
                        document.getElementById("saran").style.border = "";

                        var url="<?php echo base_url().'home/submit_pdf/'.$title; ?>?wilayah=" + wilayah + "&bidang=" + bidang + "&tahun=" + tahun + "&triwulan=" + triwulan;
                        window.open(url);
                    }
                }
            })
        }
    })
</script>
<script>
    var namaText = document.getElementById("nama");
    var usiaText = document.getElementById("usia");
    var emailText = document.getElementById("email");
    var pekerjaanText = document.getElementById("pekerjaan");
    var pendidikanText = document.getElementById("pendidikan");
    var keperluanText = document.getElementById("keperluan");

    function hapusError(e){
        e.target.style.border = "";
        e.target.parentElement.lastChild.innerHTML = "";
    }

    namaText.addEventListener("keyup",hapusError);
    usiaText.addEventListener("keyup",hapusError);
    emailText.addEventListener("keyup",hapusError);
    pekerjaanText.addEventListener("keyup",hapusError);
    pendidikanText.addEventListener("keyup",hapusError);
    keperluanText.addEventListener("keyup",hapusError);
</script>