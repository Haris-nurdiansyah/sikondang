<?php
    foreach($preview as $p){
        if($p->kategori == "1"){
            $src = "./download_files/KSDA/".$p->file;
        }
        else if($p->kategori == "2"){
            $src = "./download_files/PDRB_Kecamatan/".$p->file;
        }
        else if($p->kategori == "3"){
            $src = "./download_files/PDRB_Tahunan/".$p->file;
        }
        else if($p->kategori == "4"){
            $src = "./download_files/PDRB_Triwulanan/".$p->file;
        }
?>
    <div id="app">
      <div role="toolbar" id="toolbar">
        <div id="pager">
          <button data-pager="prev">prev</button>
          <button data-pager="next">next</button>
        </div>
        <div id="page-mode" style="display:none">
          <label>Page Mode <input type="number" value="1" min="1"/></label>
        </div>
      </div>
      <div id="viewport-container"><div role="main" id="viewport"></div></div>
    </div>
    <br>
    <a href="<?php echo base_url().'download/download/'.$id_upload; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Unduh Berkas</a>
    <script src="<?php echo base_url().'assets/js/index.js'; ?>"></script>
    <script>
        var src = "<?php echo $src; ?>";
        initPDFViewer(src);
    </script>
<?php } ?>