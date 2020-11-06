<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bidang_urusan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_bidang'));
        $this->load->library(array('form_validation','template','pagination'));
        
        if(!$this->session->userdata('username')){
            redirect('webadmin');
        }
    }
    
    function index(){
        $data['title']="Home";
        $this->template->display('dashboard/index',$data);
    }
    
    function bidang(){
        $data['title']="Bidang Urusan";
        $data['bidang']=$this->m_bidang->semua()->result();
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('backend/bidang/bidang',$data);
    }
    
    function tambahbidang(){
        $data['title']="Tambah Bidang/ urusan"; 
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama=$this->input->post('nama');
            $cek=$this->m_bidang->cekKode($nama);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Nama bidang sudah digunakan</div>";
                $this->template->display('backend/bidang_urusan/tambahbidang',$data);
            }else{                
             $info=array(
                    'nama_bidang'=>$this->input->post('nama')
              );
                
              $this->m_bidang->simpan($info);
              redirect('bidang_urusan/bidang/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('backend/bidang/tambahbidang',$data);
        }
    }
    
    function edit($id){
        $data['title']="Update Data Bidang/ Urusan";
        $this->_set_rules();
        if($this->form_validation->run()==true){
              $info=array(
                   'nama_bidang'=>$this->input->post('nama'),
               );
               $this->m_bidang->update($id,$info);
               
               $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
               $data['bidang']=$this->m_bidang->cekId($id)->row_array();
               $this->template->display('backend/bidang/editbidang',$data);
               
            }else{   
                
             $data['message']="";
             $data['bidang']=$this->m_bidang->cekId($id)->row_array();
             $this->template->display('backend/bidang/editbidang',$data); 
         } 
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_bidang->hapus($kode);
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
        $data['simpatik']=$this->m_simpatik->cari($word)->result();
        $this->template->display('backend/main/simpatik',$data);
    }
    
}