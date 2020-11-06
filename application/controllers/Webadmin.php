<?php
class Webadmin extends CI_Controller{ 
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_petugas'));
        if($this->session->userdata('username')){
            redirect('dashboard');
        }
    }
    
    function index(){
        $this->load->view('web/index');
    }
    
    function cari(){
        $cari=$this->input->post('cari');
        $data['hasil']=$this->m_buku->cari($cari)->result();
        $data['title']="Pencarian ";
        $this->load->view('web/cari',$data);
    }
    
    function user(){
        $data['title']="Data Petugas";
        $data['petugas']=$this->m_petugas->semua()->result();
        $this->load->view('web/petugas',$data);
    }
    
    function cari_user(){
        $cari=$this->input->post('cari');
        $data['title']="Data Petugas";
        $data['petugas']=$this->m_petugas->cari($cari)->result();
        $this->load->view('web/petugas',$data);
    }
    
    function login(){
        $this->load->view('web/login');
    }
    
    function proses(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $cek=$this->m_petugas->cek($username,md5($password));
            $data=$this->m_petugas->cek($username,md5($password))->result();
            foreach($data as $row){ 
                $nama=$row->nama;
                $level=$row->level;
            }
            
            if($cek->num_rows()>0){
                //login berhasil, buat session
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('level',$level);
                redirect('dashboard/index_dashboard');
                
            }else{
                //login gagal
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('webadmin');
            }
        //}
    }
}