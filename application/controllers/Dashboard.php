<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->model("m_upload");
        $this->load->library(array('form_validation','template'));
        $this->load->helper("security");
        
        if(!$this->session->userdata('username')){
            redirect('webadmin');
        }
    }
    
    function index(){
        $data['title']="Home";
        $this->template->display('dashboard/index',$data);
        //redirect('dashboard/index',$data);
    }
    
    function index_dashboard(){
        $data['title']="Home";
        redirect('simpatik/simpatik',$data);
    }
    
    function petugas(){
        $data['title']="Data Petugas";
        $data['petugas']=$this->m_petugas->semua()->result();
        $data['menu']='';
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        $this->template->display('dashboard/petugas',$data);
    }
    
    function tambahpetugas(){
        $data['title']="Tambah Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user=$this->input->post('user');
            $cek=$this->m_petugas->cekKode($user);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
                $this->template->display('dashboard/tambahpetugas',$data);
            }else{
             $info=array(
                    'id_user'=>$this->input->post('user'),
                    'password'=>md5($this->input->post('password')),
                    'nama'=>$this->input->post('nama'),
                    'level'=>$this->input->post('level')
              );
                
                $this->m_petugas->simpan($info);
                redirect('dashboard/petugas/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('dashboard/tambahpetugas',$data);
        }
    }

    function tambahfile(){
        $data["title"] = "Tambah File";

        if(isset($_POST["submit"])){
            date_default_timezone_set("Asia/Jakarta");
            $nama_file = $this->input->post("nama_file");
            $kategori=$this->input->post('kategori');

            $id_user=$this->input->post('id_user');
            $tahun_file=$this->input->post("tahun_file");

            if($kategori == "1"){
                $config["upload_path"] = "./download_files/KSDA/";
            }
            elseif($kategori == "2"){
                $config["upload_path"] = "./download_files/PDRB_Kecamatan/";
            }
            elseif($kategori == "3"){
                $config["upload_path"] = "./download_files/PDRB_Tahunan/";
            }
            elseif($kategori == "4"){
                $config["upload_path"] = "./download_files/PDRB_Triwulanan/";
            }

            $config["allowed_types"] = "pdf";
            
            $this->load->library("upload",$config);

            if(!$this->upload->do_upload("file")){
                $error = array("error" => $this->upload->display_errors());
                $data["error"] = implode($error);
                $data["message"] = "";
                $data["nama_file"] = $this->input->post("nama_file");
                $data["kategori"] = $this->input->post("kategori");
                $data["tahun_file"] = $this->input->post("tahun_file");

                $this->template->display('dashboard/tambahfile',$data);
            }
            else{
                if($this->session->userdata("level") == "Admin"){
                    $status = 1;
                }
                else{
                    $status = 0;
                }

                if($kategori == "1" OR $kategori == "4"){
                    $insert=array(
                        'id_user'=>$id_user,
                        'nama_file'=>$nama_file,
                        'kategori'=>$kategori,
                        'tahun_file'=>$tahun_file,
                        'file'=>$this->upload->data("file_name"),
                        "waktu_upload"=>date("Y-m-d H:i:s"),
                        "status"=>$status
                    );
                }
                else{
                    $insert=array(
                        'id_user'=>$id_user,
                        'nama_file'=>$nama_file,
                        'kategori'=>$kategori,
                        'file'=>$this->upload->data("file_name"),
                        "waktu_upload"=>date("Y-m-d H:i:s"),
                        "status"=>$status
                    );
                }
                    
                if($this->m_upload->simpan($insert)){
                    redirect('upload/file/add_success');
                }
            }
        }
        else{
            $data["message"]="";
            $this->template->display('dashboard/tambahfile',$data);
        }
    }
    
    function edit($id){
        $data['title']="Update data Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id');
            $info=array(
                'nama'=>$this->input->post('user'),
                'password'=>md5($this->input->post('password')),
                'level'=>$this->input->post('level')
             );
            $this->m_petugas->update($id,$info);
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            $this->template->display('dashboard/editpetugas',$data);
        }else{
            $data['message']="";
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $this->template->display('dashboard/editpetugas',$data);
        }
    }

    function edit_upload($id){
        $data['title']="Update data Unggahan File";

        if(isset($_POST["submit"])){
            if($this->m_upload->edit_detail()){
                $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
                $data['file']=$this->m_upload->get_where($id)->result();
            }
            else{
                $data['message']="<div class='alert alert-success'>Data Gagal diupdate</div>";
                $data['file']=$this->m_upload->get_where($id)->result();
            }
        }
        elseif(isset($_POST["submit_file"])){
            $cek = $this->db->get_where("tb_upload", array("id_upload" => $id))->row();
            $kategori = $cek->kategori;

            if($kategori == "1"){
                $config["upload_path"] = "./download_files/KSDA/";
            }
            elseif($kategori == "2"){
                $config["upload_path"] = "./download_files/PDRB_Kecamatan/";
            }
            elseif($kategori == "3"){
                $config["upload_path"] = "./download_files/PDRB_Tahunan/";
            }
            elseif($kategori == "4"){
                $config["upload_path"] = "./download_files/PDRB_Triwulanan/";
            }

            $config["allowed_types"] = "pdf";
            
            $this->load->library("upload",$config);
            if(!$this->upload->do_upload("file")){
                $error = array("error" => $this->upload->display_errors());

                $data["error"] = implode($error);
                $data['message']="";
                $data['file']=$this->m_upload->get_where($id)->result();
            }
            else{
                if($kategori == "1"){
                    $file = "./download_files/KSDA/".$cek->file;
                }
                elseif($kategori == "2"){
                    $file = "./download_files/PDRB_Kecamatan/".$cek->file;
                }
                elseif($kategori == "3"){
                    $file = "./download_files/PDRB_Tahunan/".$cek->file;
                }
                elseif($kategori == "4"){
                    $file = "./download_files/PDRB_Triwulanan/".$cek->file;
                }

                unlink($file);

                $data = array(
                    "file" => $this->upload->data("file_name")
                );

                if($this->db->update("tb_upload", $data, array("id_upload" => $id))){
                    $data['title']="Update data Unggahan File";
                    $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
                    $data['file']=$this->m_upload->get_where($id)->result();
                    $data["upload"] = "";
                }
                else{
                    $data['title']="Update data Unggahan File";
                    $data['message']="<div class='alert alert-success'>Data Gagal diupdate</div>";
                    $data['file']=$this->m_upload->get_where($id)->result();
                    $data["upload"] = "";
                }
            }
        }
        else{
            $data['message']="";
            $data['file']=$this->m_upload->get_where($id)->result();
        }
        
        $this->template->display('dashboard/editfile',$data);
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_petugas->hapus($kode);
    }

    function hapus_file(){
        $kode = $this->input->post("kode");
        
        if($this->m_upload->hapus_file($kode)){
            return true;
        }
        else{
            return false;
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('user','username','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
    
    function logout(){
        $this->session->unset_userdata('username');
        redirect('webadmin');
    }
}