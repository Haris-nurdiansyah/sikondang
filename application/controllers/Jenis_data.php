<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis_data extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_jenisdata','m_bidang'));
        $this->load->library(array('form_validation','template','pagination'));
        
        if(!$this->session->userdata('username')){
            redirect('webadmin');
        }
    }
    
    function index(){
        $data['title']="Home";
        $this->template->display('dashboard/index',$data);
    }
    
    function jenisdata(){
        $data['title']="Jenis Data";
         
        $data['jenis']=$this->m_jenisdata->semua()->result();
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('backend/jenisdata/jenisdata',$data);
    }
    
    function tambahjenisdata(){
        $data['title']="Tambah Jenis Data"; 
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_parent']=$this->m_jenisdata->tampil_jenisdata();
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama=$this->input->post('nama');
            $cek=$this->m_bidang->cekKode($nama);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Nama Jenis Data sudah digunakan</div>";
                $this->template->display('backend/jenis_data/tambahjenisdata',$data);
            }else{                
             $info=array(
                    'jenis_data'=>$this->input->post('nama'),
                    'id_bidang'=>$this->input->post('bidang'),
                    'id_parent'=>$this->input->post('jenisdata')
              );
                
              $this->m_jenisdata->simpan($info);
              redirect('jenis_data/jenisdata/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('backend/jenisdata/tambahjenisdata',$data);
        }
    }
    
    function edit($id){
        $data['title']="Update Jenis Data";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_parent']=$this->m_jenisdata->tampil_jenisdata();
        $this->_set_rules();
        if($this->form_validation->run()==true){
              $info=array(
                   'jenis_data'=>$this->input->post('nama'),
                   'id_bidang'=>$this->input->post('bidang'),
                   'id_parent'=>$this->input->post('jenisdata')
               );
               $this->m_jenisdata->update($id,$info);
               
               $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
               $data['jenis']=$this->m_jenisdata->cekId($id)->row_array();
               $this->template->display('backend/jenisdata/editjenisdata',$data);
               
            }else{   
                
             $data['message']="";
             $data['jenis']=$this->m_jenisdata->cekId($id)->row_array();
             $this->template->display('backend/jenisdata/editjenisdata',$data); 
         } 
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_jenisdata->hapus($kode);
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
    
    function search_keyword($offset=0)
    {
        $data['message']='';
        $word=$this->input->post('data_keyword');
        $data['offset'] = $offset; 
        $data['jenis']=$this->m_jenisdata->cari($word)->result();
        $this->template->display('backend/jenisdata/jenisdata',$data);
    }
    
}