<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Upload extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->model("m_upload");
            $this->load->library(array('form_validation','template'));
        }

        function file(){
            $data["title"] = "Data File";
            $data["file"] = $this->m_upload->get_all()->result();
            $data['menu']='';
            if($this->uri->segment(3)=="delete_success")
                $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
            else if($this->uri->segment(3)=="add_success")
                $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
            else
            $data['message']='';

            $this->template->display("dashboard/upload",$data);
        }
    }
?>