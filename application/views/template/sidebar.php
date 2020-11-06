<style type="text/css">
.panel-group{
    height:500px;
    overflow-y:scroll;
    width:100%;
}
</style>
<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                        </span> DATA MASTER</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <?php if($this->session->userdata("level") == "Admin"){ ?>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-user"></span> <a href="<?php echo site_url('dashboard/petugas');?>">Admin Sistem</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-floppy-open"></span> <a href="<?php echo site_url('bidang_urusan/bidang');?>">Bidang/ Urusan</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-file"></span> <a href="<?php echo site_url('jenis_data/jenisdata');?>">Jenis Data</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-upload"></span> <a href="<?php echo site_url('upload/file');?>">Upload File</a>
                                                </td>
                                            </tr>
                                          
                                            <!--
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-filter"></span> <a href="#">Sub Jenis Data</a>
                                                </td>
                                            </tr>-->
                                            
                                            <!--
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-map-marker"></span> <a href="<?php //echo site_url('wilayah/wilayah');?>">Wilayah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-file"></span> <a href="<?php //echo site_url('menu/menu');?>">Menu</a>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-globe"></span> <a href="<?php //echo site_url('master/konten_site');?>">Website</a>
                                                </td>
                                            </tr>-->
                                        </table>
                                    </div>
                                </div>
                </div>
              
                <div class="panel panel-default">
                    <div class="panel-heading"> 
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-queen">
                                        </span> DATA DALAM ANGKA </a>
                                    </h4>
                    </div>
                   <div class="panel-body">
                        <table class="table">
                               <tr>
                                   <td>
                                       <span class="glyphicon glyphicon-book"></span> <a href="<?php echo site_url('simpatik/tambahsimpatik');?>">Input Data Utama</a>
                                   </td>
                               </tr>
                               <?php if($this->session->userdata("level") == "Admin"){ ?>
                               <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-check"></span> <a href="<?php echo site_url('simpatik/validasi'); ?>">Validasi Data Statistik</a>
                                    </td>
                               </tr>
                               <tr>
                                   <td>
                                       <span class="glyphicon glyphicon-download"></span> <a href="<?php echo site_url('download/download_list');?>">Info Download File</a>
                                   </td>
                               </tr>
                               <?php }if($this->session->userdata("username") !== "admin"){ ?>
                                <tr>
                                   <td>
                                       <i class="fa fa-list"></i> <a href="<?php echo site_url('simpatik/simpatik_user');?>">Info Data Statistik User</a>
                                   </td>
                                </tr> 
                               <?php } ?>
                       </table>
                    </div>
                </div> 
                <!--
                <div class="panel panel-default">
                    <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-book">
                                        </span> LAPORAN </a>
                                    </h4>
                    </div>
                    
                   <div class="panel-body">
                        <table class="table">
                               <tr>
                                   <td>
                                       <span class="glyphicon glyphicon-file"></span> <a href="<?php //echo site_url('dashboard/petugas');?>">Laporan Kepemilikan Tanah</a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                       <span class="glyphicon glyphicon-file"></span> <a href="<?php //echo site_url('menu/menu');?>">Laporan Biaya AJB Tanah</a>
                                   </td>
                              </tr>
                       </table>
                    </div>
             </div>-->
</div>


