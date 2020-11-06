<?php
class Download extends CI_Controller { 
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->model(array('m_download','m_download_file'));
        $this->load->library(array('form_validation','template'));
        $this->load->helper('string',"security"); 
    }
    
    function index(){
        $data['title']="Login";
        $data['konten']="frontend/download/download";
        
        if(isset($_POST["submit"])){
            $berkas = $this->input->post("berkas");
            $data["berkas"] = $berkas;
            $data["active"] = "";

            if($berkas == "1"){
                $data["ksda_2014"] = $this->m_download->get_ksda_2014()->result();
                $data["nr_ksda_2014"] = $this->m_download->get_ksda_2014()->num_rows();
                $data["ksda_2015"] = $this->m_download->get_ksda_2015()->result();
                $data["nr_ksda_2015"] = $this->m_download->get_ksda_2015()->num_rows();
                $data["ksda_2016"] = $this->m_download->get_ksda_2016()->result();
                $data["nr_ksda_2016"] = $this->m_download->get_ksda_2016()->num_rows();
                $data["ksda_2017"] = $this->m_download->get_ksda_2017()->result();
                $data["nr_ksda_2017"] = $this->m_download->get_ksda_2017()->num_rows();
                $data["ksda_2018"] = $this->m_download->get_ksda_2018()->result();
                $data["nr_ksda_2018"] = $this->m_download->get_ksda_2018()->num_rows();
                $data["ksda_2019"] = $this->m_download->get_ksda_2019()->result();
                $data["nr_ksda_2019"] = $this->m_download->get_ksda_2019()->num_rows();
                $data["ksda_2020"] = $this->m_download->get_ksda_2020()->result();
                $data["nr_ksda_2020"] = $this->m_download->get_ksda_2020()->num_rows();
            }
            else{
                $jenis = $this->input->post("jenis_pdrb");
                $data["jenis"] = $jenis;

                if($jenis == "1"){
                    $data["pdrb_kec"] = $this->m_download->get_pdrb_kec()->result();
                    $data["nr_pdrb_kec"] = $this->m_download->get_pdrb_kec()->num_rows();
                }
                elseif($jenis == "2"){
                    $data["pdrb_tahunan"] = $this->m_download->get_pdrb_tahunan()->result();
                    $data["nr_pdrb_tahunan"] = $this->m_download->get_pdrb_tahunan()->num_rows();
                }
                else{
                    $data["pdrb_tri_2014"] = $this->m_download->get_pdrb_tri_2014()->result();
                    $data["nr_pdrb_tri_2014"] = $this->m_download->get_pdrb_tri_2014()->num_rows();
                    $data["pdrb_tri_2015"] = $this->m_download->get_pdrb_tri_2015()->result();
                    $data["nr_pdrb_tri_2015"] = $this->m_download->get_pdrb_tri_2015()->num_rows();
                    $data["pdrb_tri_2016"] = $this->m_download->get_pdrb_tri_2016()->result();
                    $data["nr_pdrb_tri_2016"] = $this->m_download->get_pdrb_tri_2016()->num_rows();
                    $data["pdrb_tri_2017"] = $this->m_download->get_pdrb_tri_2017()->result();
                    $data["nr_pdrb_tri_2017"] = $this->m_download->get_pdrb_tri_2017()->num_rows();
                    $data["pdrb_tri_2018"] = $this->m_download->get_pdrb_tri_2018()->result();
                    $data["nr_pdrb_tri_2018"] = $this->m_download->get_pdrb_tri_2018()->num_rows();
                    $data["pdrb_tri_2019"] = $this->m_download->get_pdrb_tri_2019()->result();
                    $data["nr_pdrb_tri_2019"] = $this->m_download->get_pdrb_tri_2019()->num_rows();
                    $data["pdrb_tri_2020"] = $this->m_download->get_pdrb_tri_2020()->result();
                    $data["nr_pdrb_tri_2020"] = $this->m_download->get_pdrb_tri_2020()->num_rows();
                }
            }
        }

        $this->load->view('home2',$data);
    } 

    function detail_preview(){
        $data["preview"] = $this->m_download->get_preview()->result();
        $data["id_upload"] = $this->input->post("id_upload");
        
        $this->load->view("frontend/download/preview",$data);
    }
    
    //page download
    function download(){
        $where = array(
            "id_upload" => $this->uri->segment("3")
        );

        $data['id_upload'] = $this->uri->segment("3");
        $data['konten']="frontend/download/formulir";
        $file = $this->m_download_file->get_where($where)->row();
        $data["kategori"] = $file->kategori;
        $data["file"] = $file->file;

        $this->load->view('home2',$data);
    } 
    
    //download file list
    function download_list(){
        $data['title']="Download File List";
        $data['q_download']=$this->m_download_file->all()->result();
        $data["ksda"] = $this->m_download_file->get_ksda()->num_rows();
        $data["pdrb_kec"] = $this->m_download_file->get_pdrb_kec()->num_rows();
        $data["pdrb_tahun"] = $this->m_download_file->get_pdrb_tahun()->num_rows();
        $data["pdrb_tri"] = $this->m_download_file->get_pdrb_tri()->num_rows();
        $data["pdf"] = $this->m_download_file->get_pdf()->num_rows();
        $data["grafik"] = $this->m_download_file->get_grafik()->num_rows();

        $this->template->display('backend/download/downloadlist',$data); 
    } 
    
    function download_file(){
        if($this->m_download_file->download()){
            echo "OK";
        }
        else{
            echo "Gagal";
        }
    } 
    
    //daftar page
    function daftar(){
        $data['title']="Register";
        $data['konten']="frontend/download/daftar";
        $this->load->view('home2',$data);
    }
    
    //submit daftar
    function submit_daftar(){
        if(isset($_POST['sbm'])){
            $ket_pass = $this->acakangkahuruf(7);
            $password = md5($ket_pass);
            
            $nama=$this->input->post('nama');
            //$username=$this->input->post('username');
            $email=$this->input->post('email');
            //$pass=$this->input->post('pass');
            //$userdata=$this->session->userdata('logged_in');
            $created_date=date("Y-m-d h:i:s");
            //$created_by=$userdata['username'];
            
            $info=array(
                    'nama'=>$nama,
                    //'username'=>$username,
                    'email'=>$email,
                    'password'=>$password,
                    'ket_pass'=>$ket_pass,
                    'aktip'=>0,
                    'created_date'=>$created_date,
                    'created_by'=>$nama   
                );
            
            //$this->m_download->simpan($info);
            $id = $this->m_download->add_account($info);
          
         //enkripsi id
         $encrypted_id = md5($id);
        
        //Configurasi
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com"; //pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "yadi2074@gmail.com"; //isi dengan email anda
        $config['smtp_pass']= "yadiyadi2020okyesok"; //isi dengan password anda
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        
        $this->load->library('email', $config);
        //memanggil library email dan set konfigurasi 
        //$this->email->initialize($config);
        
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("Verifikasi Akun Sikondang Download File");
        $this->email->message(
            "Anda telah melakuan registrasi Untuk Download File, <br>"
          . "Password : ".$ket_pass." <br>"
          . "Untuk memverifikasi silahkan klik tautan dibawah ini <br><br> ".
            site_url("download/verification/$ket_pass")
       );
  
       if($this->email->send())
        {
            echo "Berhasil melakukan registrasi, silahkan cek email anda";
        }else
        {
            echo "Berhasil melakukan registrasi, Anda gagal mengirim verifikasi email";
        }
  
        echo "<br><br><a href='".site_url("download")."'>Kembali ke Login </a>";
     }
           
   }
   
    //verification
    public function verification($key)
    {
        $this->m_download->changeActiveState($key);
        
        echo "Selamat anda telah memverifikasi akun anda di Aplikasi Sikondang untuk download file ";
        echo "<br><br><a href='".site_url("download")."'>Kembali ke Login</a>";
    }
    
    //proses login
    function proses(){
            $idx=$this->input->post('idx');
            $username=$this->input->post('user');
            $password=$this->input->post('pass');
            $aktip=1;
            $cek=$this->m_download->cek($username,md5($password), $aktip);
            $data=$this->m_download->cek($username,md5($password))->result();
            foreach($data as $row){ 
                //$id=$row->id;
                $nama=$row->nama;
                //$email=$row->email;
            }
            
            if($cek->num_rows()>0){
                //login berhasil, buat session
                $this->session->set_userdata('email',$username);
                $this->session->set_userdata('nama',$nama);
                
           
            switch($idx){
            //KSDA
            case 1:
                $myfile="KSDA/1. KSDA 2014/Kota Serang Dalam Angka 2014_BAPPEDA_F.doc";
                break;
            case 2:
                $myfile="KSDA/1. KSDA 2014/Kota Serang Dalam Angka 2014_BAPPEDA_F.pdf";
                break;
            case 3:
                $myfile="KSDA/2. KSDA 2015_Revisi.pdf";
                break;
            case 4:
                $myfile="KSDA/3. KSDA 2016Revisi2.pdf";
                break;
            case 5:
                $myfile="KSDA/4. KSDA 2017 FINAL.pdf";
                break;
            
            //PDRB Kecamatan
            case 6:
                $myfile="PDRB Kecamatan/PDRB Kecamatan 2015.pdf";
                break;
            
            //PDRB Tahunan
            case 7:
                $myfile="PDRB Tahunan/1. PDRB 2013 (1).pdf";
                break;
            case 8:
                $myfile="PDRB Tahunan/2. PDRB 2014.pdf";
                break;
            case 9:
                $myfile="PDRB Tahunan/3. PDRB 2015.pdf";
                break;
            case 10:
                $myfile="PDRB Tahunan/4. PDRB 2016.pdf";
                break;
            
            //PDRB Triwulanan (2014)
            case 11:
                $myfile="PDRB Triwulanan/2014/PDRB Kota Serang Triwulan I 2014.pdf";
                break;
            case 12:
                $myfile="PDRB Triwulanan/2014/PDRB Kota Serang Triwulan II 2014.pdf";
                break;
            case 13:
                $myfile="PDRB Triwulanan/2014/PDRB Kota Serang Triwulan III 2014.pdf";
                break;
            case 14:
                $myfile="PDRB Triwulanan/2014/PDRB Kota Serang Triwulan IV 2014.pdf";
                break;
            
            //PDRB Triwulanan (2015)
            case 15:
                $myfile="PDRB Triwulanan/2015/PDRB Kota Serang TW 1 2015.pdf";
                break;
            case 16:
                $myfile="PDRB Triwulanan/2015/PDRB Kota Serang TW 2 2015.pdf";
                break;
            case 17:
                $myfile="PDRB Triwulanan/2015/PDRB Kota Serang TW 3 2015.pdf";
                break;
            case 18:
                $myfile="PDRB Triwulanan/2015/PDRB Kota Serang TW 4 2015.pdf";
                break;
            
            //PDRB Triwulanan (2016)
            case 19:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 1  2016/PDRB Kota Serang TW 1 2016.docx";
                break;
            case 20:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 1  2016/PDRB Kota Serang TW 1 2016.pdf";
                break;
            case 21:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 2  2016/PDRB Kota Serang TW 2 2016.docx";
                break;
            case 22:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 2  2016/PDRB Kota Serang TW 2 2016.pdf";
                break;
            case 23:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 3  2016/PDRB Kota Serang TW 3 2016.docx";
                break;
            case 24:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 3  2016/PDRB Kota Serang TW 3 2016.pdf";
                break;
            case 25:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 4  2016/PDRB Kota Serang TW 4 2016.docx";
                break;
            case 26:
                $myfile="PDRB Triwulanan/2016/PDRB Kota Serang TW 4  2016/PDRB Kota Serang TW 4 2016.pdf";
                break;
            
            //PDRB Triwulanan (2017)
            case 27:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW 1 2017.docx";
                break;
            case 28:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW 1 2017.pdf";
                break; 
            case 29:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW II 2017.docx";
                break;
            case 30:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW II 2017.pdf";
                break; 
            case 31:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW III 2017.docx";
                break; 
            case 32:
                $myfile="PDRB Triwulanan/2017/PDRB Kota Serang TW III 2017.pdf";
                break; 
            }
           
            $created_date=date("Y-m-d h:i:s");
            $info = array(
                 'email'=>$username,
                 'nama_file'=>$myfile,
                 'created_date'=>$created_date,
             ); 
                
             $this->m_download_file->simpan($info);
             redirect('download/download_file/'.$idx);
                
            }else{
                
                //login gagal
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('download');
            }
    } 
    
    //fungsi random passwd
    function acakangkahuruf($panjang)
    {
        $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $string='';
        
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
        
        return $string;
    }  
     
    function hapus($id){
        //$kode=$this->input->post('kode');
        $this->m_download_file->hapus($id);
        redirect(base_url()."download/download_list");
    }
}