<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Simpatik extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_simpatik','m_bidang','m_jenisdata'));
        $this->load->library(array('form_validation','template','pagination'));
        
        if(!$this->session->userdata('username')){
            redirect('webadmin');
        }
    }
    
    function index(){
        $data['title']="Home";
        $this->template->display('dashboard/index',$data);
    }
    
    function simpatik() {
        $data['title']="Data Statistik";
        $simpatik = $this->m_simpatik->semua();
        $config["base_url"] = base_url()."simpatik/simpatik/";
        $config["total_rows"] = $simpatik;
        $config["full_tag_open"] = "<ul class='pagination'>";
        $config["full_tag_close"] = "</ul>";
        $config["per_page"] = 5000;
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='disabled'><li class='active'><a href='#'>";
        $config["cur_tag_close"] = "<span class='sr-only'></span></a></li>";
        $config["next_tag_open"] = "<li>";
        $config["next_tagl_close"] = "</li>";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tagl_close"] = "</li>";
        $config["first_tag_open"] = "<li>";
        $config["first_tagl_close"] = "</li>";
        $config["last_tag_open"] = "<li>";
        $config["last_tagl_close"] = "</li>";
        $config["next_link"] = "&raquo;";
        $config["prev_link"] = "&laquo;";
        $config["last_link"] = "Halaman Terakhir";
        $config["first_link"] = "Halaman Pertama";
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data["simpatik"] = $this->m_simpatik->data($config["per_page"],$from);
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('backend/main/simpatik',$data);
    }

    function simpatik_user(){
        $data["title"] = "Data Statistik User";
        $data["simpatik"] = $this->m_simpatik->semua_user()->result();
        
        $this->template->display("backend/main/simpatik_user",$data);
    }
    
    function tambahsimpatik(){
        $data['title']="Input Data";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        //$data['q_jenis']=$this->m_jenisdata->tampil_jenisdata();
        $data['q_wilayah']=$this->m_simpatik->tampil_wilayah();
        $this->_set_rules();
        
        if($this->form_validation->run()==true){
            $nik=$this->input->post('nik');
            $cek=$this->m_simpatik->cekKode($nik);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>ID sudah digunakan</div>";
                $this->template->display('backend/main/simpatik_input',$data);
            }else{
                date_default_timezone_set("Asia/Jakarta");
                                
            $created_date=date("Y-m-d h:i:s");
            $created_by=$this->session->userdata("nama");
                
            $info=array(
                    'id_user'=>$this->session->userdata('username'),
                    'bidang_urusan'=>$this->input->post('id_bidang'),
                    'jenis_data'=>$this->input->post('id_jenis'),
                    'tahun'=>$this->input->post('tahun'),
                    'triwulan'=>$this->input->post('triwulan'),
                    'wilayah'=>$this->input->post('wilayah'),
                    'jumlah'=>$this->input->post('jumlah'),
                    'satuan'=>$this->input->post('satuan'),
                    'sumber_data'=>$this->input->post('sumberdata'),
                    'created_date'=>$created_date,
                    'created_by'=>$created_by
              );
                
              $this->m_simpatik->simpan($info);
              redirect('simpatik/simpatik/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('backend/main/simpatik_input',$data);
        }
    }
    
    function edit($id,$idbidang){
        $data['title']="Update Data";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_jenis']=$this->m_jenisdata->ambil_jenis($idbidang);
        $data['q_wilayah']=$this->m_simpatik->tampil_wilayah();
        $data["bidang"] = $idbidang;
        $cek = $this->db->get_where("tb_simpatik", array("id_simpatik" => $id))->row();
        $data["jenis"] = $cek->jenis_data;
        
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id_simpatik');

            date_default_timezone_set("Asia/Jakarta"); 
            $updated_date=date("Y-m-d h:i:s");
            $updated_by=$this->session->userdata("nama");
            
            $info=array(
                    'bidang_urusan'=>$this->input->post('id_bidang'),
                    'jenis_data'=>$this->input->post('id_jenis'),
                    'tahun'=>$this->input->post('tahun'),
                    'triwulan'=>$this->input->post('triwulan'),
                    'wilayah'=>$this->input->post('wilayah'),
                    'jumlah'=>$this->input->post('jumlah'),
                    'satuan'=>$this->input->post('satuan'),
                    'sumber_data'=>$this->input->post('sumberdata'),
                    'updated_date'=>$updated_date,
                    'updated_by'=>$updated_by
             );
             $this->m_simpatik->update($id,$info);
             $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
             $data['simpatik']=$this->m_simpatik->cekId($id)->row_array();
             $this->template->display('backend/main/simpatik_edit',$data);
            } else {
            
            $data['message']="";
            $data['simpatik']=$this->m_simpatik->cekId($id)->row_array();
            $this->template->display('backend/main/simpatik_edit',$data);
            }
    }

    function edit_validasi($id,$idbidang){
        $data['title']="Update Data Validasi";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_jenis']=$this->m_jenisdata->ambil_jenis($idbidang);
        $data['q_wilayah']=$this->m_simpatik->tampil_wilayah();
        $data["bidang"] = $idbidang;
        $cek = $this->db->get_where("tb_simpatik_user", array("id_simpatik_user" => $id))->row();
        $data["jenis"] = $cek->jenis_data;
        
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id_simpatik_user');
            
            $info=array(
                    'bidang_urusan'=>$this->input->post('id_bidang'),
                    'jenis_data'=>$this->input->post('id_jenis'),
                    'tahun'=>$this->input->post('tahun'),
                    'triwulan'=>$this->input->post('triwulan'),
                    'wilayah'=>$this->input->post('wilayah'),
                    'jumlah'=>$this->input->post('jumlah'),
                    'satuan'=>$this->input->post('satuan'),
                    'sumber_data'=>$this->input->post('sumberdata')
             );
             $this->m_simpatik->update_validasi($id,$info);
             if($this->input->post("validasi") == "0"){
                $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
                $data['simpatik']=$this->m_simpatik->cekId_validasi($id)->row_array();
                $this->template->display('backend/main/simpatik_edit_validasi',$data);
             }
             else{
                redirect('simpatik/simpatik/add_success');
             }
            } else {
            
            $data['message']="";
            $data['simpatik']=$this->m_simpatik->cekId_validasi($id)->row_array();
            $this->template->display('backend/main/simpatik_edit_validasi',$data);
            }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        if($this->m_simpatik->hapus($kode)){
            return true;
        }
        else{
            return false;
        }
    }

    function hapus_simpatik_user(){
        $kode=$this->input->post('kode');
        if($this->m_simpatik->hapus_simpatik_user($kode)){
            return true;
        }
        else{
            return false;
        }
    }
    
    function cetak(){
        $data['title']="Data eTanah";
        $data['etanah']=$this->m_etanah->semua()->result();
        //$data['etanah']=$this->m_etanah->cetak_etanah($id)->result();
        $this->load->view('etanah/etanah_cetak', $data);
        $sumber=$this->load->view('etanah/etanah_cetak', $data, TRUE);
        $html=$sumber;
 
        $pdfFilePath="etanah.pdf";
        
        //lokasi file css yang akan di load
        $css = $this->load->view('etanah/css/bootstrap.min.css');
        $stylesheet = file_get_contents($css);
 
        $pdf=$this->m_pdf->load();
 
        $pdf->AddPage('L');
        $pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html);
        
        $pdf->Output($pdfFilePath, "D");
        
        exit();
    }
       
     function _set_rules(){
        //$this->form_validation->set_rules('id','id','required|trim');
        $this->form_validation->set_rules('wilayah','wilayah','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
     }
     
     //dropdown berantai
     public function pilih_jenis($idbidang){                
            $data['q_jenis']=$this->m_jenisdata->ambil_jenis($idbidang);
            $this->load->view('dropdown/v_drop_down_jenis', $data);
     }
     
    //search form
    function search_keyword($offset=0)
    {
        $data['message']='';
        $word=$this->input->post('data_keyword');
        
        $config['base_url']=base_url()."simpatik/simpatik";
        $config['total_rows']= $this->db->query("SELECT * FROM tb_simpatik;")->num_rows();
        $config['per_page']=10;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        
        //Tambahan untuk styling css
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);
      
        $data['offset'] = $offset; 
        $data['simpatik']=$this->m_simpatik->cari($word,$config)->result();
        $this->template->display('backend/main/simpatik',$data);
    }

    function validasi(){
        $data["title"] = "Data Statistik Oleh User";
        $data["simpatik"] = $this->m_simpatik->simpatik_user()->result();
        $data["menu"] = "";
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil divalidasi</div>";
        else
            $data['message']='';

        $this->template->display("backend/main/simpatik_validasi",$data);
    }
}