    <div class="row">
         <div class="col-lg-12 panel panel-info" style="padding:0">
            <div class="panel-heading">
                <h4><i class="fa fa-chart-bar"></i> Bidang / Urusan (Grafik)</h4>
            </div>
            <div class="panel-body">
                    <form method="post" action="<?php echo base_url()?>home/get_grafik" class="form-horizontal" name="form-grafik">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Bidang Urusan</b>
                            <?php
                                $style_bidang='class="form-control input-sm" id="id_bidang" onChange="tampilJenisdata()" required="" ';
                                echo form_dropdown('bidang',$q_bidang,$bidang,$style_bidang);
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Jenis Data</b>
                            <?php
                                    $style_jenisdata='class="form-control input-sm" id="id_jenisdata" required="" ';
                                    echo form_dropdown("jenisdata",$q_jenisdata,$jenisdata,$style_jenisdata);
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <b>Tahun</b>
                            </div>
                            <div class="col-lg-4">
                                <select name="tahun_awal" class="form-control" required="">
                                    <option value="2010" <?php if($tahun_awal == "2010"){echo "selected"; } ?>>2010</option>
                                    <option value="2011" <?php if($tahun_awal == "2011"){echo "selected"; } ?>>2011</option>
                                    <option value="2012" <?php if($tahun_awal == "2012"){echo "selected"; } ?>>2012</option>
                                    <option value="2013" <?php if($tahun_awal == "2013"){echo "selected"; } ?>>2013</option>
                                    <option value="2014" <?php if($tahun_awal == "2014"){echo "selected"; } ?>>2014</option>
                                    <option value="2015" <?php if($tahun_awal == "2015"){echo "selected"; } ?>>2015</option>
                                    <option value="2016" <?php if($tahun_awal == "2016"){echo "selected"; } ?>>2016</option>
                                    <option value="2017" <?php if($tahun_awal == "2017"){echo "selected"; } ?>>2017</option>
                                    <option value="2018" <?php if($tahun_awal == "2018"){echo "selected"; } ?>>2018</option>
                                    <option value="2019" <?php if($tahun_awal == "2019"){echo "selected"; } ?>>2019</option>
                                    <option value="2020" <?php if($tahun_awal == "2020"){echo "selected"; } ?>>2020</option>
                                    <option value="2021" <?php if($tahun_awal == "2021"){echo "selected"; } ?>>2021</option>
                                    <option value="2022" <?php if($tahun_awal == "2022"){echo "selected"; } ?>>2022</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                Sampai
                            </div>
                            <div class="col-lg-4">
                                <select name="tahun_akhir" class="form-control" required="">
                                    <option value="2012" <?php if($tahun_akhir == "2012"){echo "selected"; } ?>>2012</option>
                                    <option value="2013" <?php if($tahun_akhir == "2013"){echo "selected"; } ?>>2013</option>
                                    <option value="2014" <?php if($tahun_akhir == "2014"){echo "selected"; } ?>>2014</option>
                                    <option value="2015" <?php if($tahun_akhir == "2015"){echo "selected"; } ?>>2015</option>
                                    <option value="2016" <?php if($tahun_akhir == "2016"){echo "selected"; } ?>>2016</option>
                                    <option value="2017" <?php if($tahun_akhir == "2017"){echo "selected"; } ?>>2017</option>
                                    <option value="2018" <?php if($tahun_akhir == "2018"){echo "selected"; } ?>>2018</option>
                                    <option value="2019" <?php if($tahun_akhir == "2019"){echo "selected"; } ?>>2019</option>
                                    <option value="2020" <?php if($tahun_akhir == "2020"){echo "selected"; } ?>>2020</option>
                                    <option value="2021" <?php if($tahun_akhir == "2021"){echo "selected"; } ?>>2021</option>
                                    <option value="2022" <?php if($tahun_akhir == "2022"){echo "selected"; } ?>>2022</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <b>Model Grafik </b> 
                                <select name="model" class="form-control" id="model" required="">
                                    <option value="">-- Pilih Model Grafik --</option>
                                    <option value="bar" <?php if($model == "bar"){echo "selected"; } ?>>Column</option>
                                    <option value="horizontalBar" <?php if($model == "horizontalBar"){echo "selected"; } ?>>Bar</option>
                                    <option value="line" <?php if($model == "line"){echo "selected"; } ?>>Line</option>
                                    <option value="pie" <?php if($model == "pie"){echo "selected"; } ?>>Pie</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-info"><i class="fa fa-chart-bar"></i> Tampilkan Grafik</button>
                            </div>
                        </div>
                        
                    </form>
            </div>
            <br><br>
        </div>
        
        <!-- Tampil Grafik ------>
        <div class="col-lg-12 box">
            <section id="section-to-print">
                <h4 class="text-primary"><i class="fa fa-chart-bar"></i> <span id="grafik"><?php echo strtoupper($title);?></span></h4>
                <h5 class="text-danger">Bidang/Urusan : <b id="nama_bidang"></b></h5>
                <h5 class="text-danger">Jenis Data : <b id="jenisData"></b></h5>
                <h5 class="text-danger"><i class="far fa-calendar-alt"></i> Tahun : <b id="tahunBidang"><?php echo $tahun_awal." - ".$tahun_akhir; ?></b></h5>
                <h5 class="text-info">Total Data : <b id="infoTotal"></b></h5>
                <hr> 
                
                <div class="chart-responsive" style="position:relative;height:75vh;width:100%;">
                    <canvas id="chartData" height="140"></canvas>
                </div>
            </section>
        </div>
        <script>
                var bidang = document.getElementById("id_bidang");
                var optBidang = bidang.options[bidang.selectedIndex].text;
                var jenisdata = document.getElementById("id_jenisdata");
                var optData = jenisdata.options[jenisdata.selectedIndex].text;
                var model = document.getElementById("model");
                var optModel = model.options[model.selectedIndex].text;
                
                document.getElementById("nama_bidang").innerHTML = optBidang;
                document.getElementById("jenisData").innerHTML = optData;
                document.getElementById("grafik").innerHTML += " " + optModel;
        </script>
                                    
    </div>
    <div class="row">
        <div class="col-lg-12 panel panel-success" style="padding:0">
            <div class="panel-heading">
                <h4><i class="fa fa-print"></i> Formulir Cetak Grafik</h4>
            </div>
            <div class="panel-body">
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
                    </div>
                    <div class="form-group">
                        <label>Kritik / Saran</label>
                        <textarea name="saran" id="saran" rows="3" class="form-control" placeholder="Kritik / Saran Anda"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" value="Submit Formulir" class="btn btn-success" id="submit">Kirim Formulir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br>
<script type="text/javascript">
    
    function tampilJenisdata()
    {
	 var idbidang = document.getElementById("id_bidang").value;
	 $.ajax({
		 url:"<?php echo base_url();?>home/pilih_jenisdata/"+idbidang+" ",
		 success: function(response){
		 $("#id_jenisdata").html(response);
		 },
                         
		 dataType:"html"
	 });
         
	 return false;
    }

</script>
<script>
    var bidang = document.getElementById("nama_bidang").innerHTML;
    var data = document.getElementById("jenisData").innerHTML;
    var tahun = document.getElementById("tahunBidang").innerHTML;
    var grafik = document.getElementById("grafik").innerHTML;

    document.getElementById("nama_file").value = "Cetak " + grafik + " Bidang " + bidang + " Jenis Data " + data + " Tahun " + tahun;
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

        if(nama.trim() !== "" && usia.trim() !== "" && email.trim() !== "" && pekerjaan.trim() !== "" && pendidikan.trim() !== "" && keperluan.trim() !== ""){
            $.ajax({
                type: "POST",
                url: "submit_grafik",
                data: {"nama": nama, "gender": gender, "usia": usia, "email": email, "pekerjaan": pekerjaan, "pendidikan": pendidikan, "keperluan": keperluan, "membuka": membuka, "membantu": membantu, "saran": saran, "nama_file": nama_file},
                success: function(response){
                    if(response == "OK"){
                        window.print();

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