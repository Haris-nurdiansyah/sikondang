<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><i class="fa fa-list"></i> Formulir Unduh Berkas</h4>
			</div>
			<div class="panel-body" id="panelBody">
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
                        <input type="hidden" name="id_upload" value="<?php echo $id_upload; ?>">
                    </div>
                    <div class="form-group">
                        <label>Kritik / Saran</label>
                        <textarea name="saran" id="saran" rows="3" class="form-control" placeholder="Kritik / Saran Anda"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" value="Submit Formulir" class="btn btn-success" id="submit">Unduh</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>

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
        var id_upload = document.forms["form"]["id_upload"].value;

        if(nama.trim() !== "" && usia.trim() !== "" && email.trim() !== "" && pekerjaan.trim() !== "" && pendidikan.trim() !== "" && keperluan.trim() !== ""){
            $.ajax({
                type: "POST",
                url: "../download_file",
                data: {"nama": nama, "gender": gender, "usia": usia, "email": email, "pekerjaan": pekerjaan, "pendidikan": pendidikan, "keperluan": keperluan, "membuka": membuka, "membantu": membantu, "saran": saran, "id_upload": id_upload},
                success: function(response){
                    if(response == "OK"){
						var kategori = "<?php echo $kategori; ?>";
						var file = "<?php echo $file; ?>";
						var url = "";

						if(kategori == "1"){
							url = "<?php echo base_url().'download_files/KSDA/'.$file; ?>";
							window.open(url,"_self");
						}
						else if(kategori == "2"){
							url = "<?php echo base_url().'download_files/PDRB_Kecamatan/'.$file; ?>";
							window.open(url,"_self");
						}
						else if(kategori == "3"){
							url = "<?php echo base_url().'download_files/PDRB_Tahunan/'.$file; ?>";
							window.open(url,"_self");
						}
						else if(kategori == "4"){
							url = "<?php echo base_url().'download_files/PDRB_Triwulanan/'.$file; ?>";
							window.open(url,"_self");
						}
                    }
					else{
						$("#panelBody").text("Gagal");
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