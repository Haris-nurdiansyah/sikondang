<?php
class Home extends CI_Controller { 
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_simpatik','m_bidang','m_jenisdata'));
        $this->load->library(array('form_validation','template'));
        $this->load->helper('string','security'); 
    }
    
    function index(){
        $where1 = array("id_bidang" => 1);
        $where2 = array("id_bidang" => 2);
        $where3 = array("id_bidang" => 3);
        $where4 = array("id_bidang" => 4);
        $where5 = array("id_bidang" => 5);
        $where6 = array("id_bidang" => 6);
        $where7 = array("id_bidang" => 7);
        $where8 = array("id_bidang" => 8);
        $where9 = array("id_bidang" => 9);
        $where10 = array("id_bidang" => 10);
        $where11 = array("id_bidang" => 11);
        $where12 = array("id_bidang" => 12);
        $where13 = array("id_bidang" => 13);
        $where14 = array("id_bidang" => 14);
        $where15 = array("id_bidang" => 15);
        $where16 = array("id_bidang" => 16);
        $where17 = array("id_bidang" => 17);
        $where18 = array("id_bidang" => 18);
        $where19 = array("id_bidang" => 19);
        $where20 = array("id_bidang" => 20);
        $where21 = array("id_bidang" => 21);
        $where22 = array("id_bidang" => 22);

        $data["data_pendidikan"] = $this->m_jenisdata->get_where($where1)->result();
        $data["data_kesehatan"] = $this->m_jenisdata->get_where($where2)->result();
        $data["data_pupr"] = $this->m_jenisdata->get_where($where3)->result();
        $data["data_pkp"] = $this->m_jenisdata->get_where($where4)->result();
        $data["data_kkupm"] = $this->m_jenisdata->get_where($where5)->result();
        $data["data_sos"] = $this->m_jenisdata->get_where($where6)->result();
        $data["data_tk"] = $this->m_jenisdata->get_where($where7)->result();
        $data["data_pppa"] = $this->m_jenisdata->get_where($where8)->result();
        $data["data_pangan"] = $this->m_jenisdata->get_where($where9)->result();
        $data["data_tanah"] = $this->m_jenisdata->get_where($where10)->result();
        $data["data_lh"] = $this->m_jenisdata->get_where($where11)->result();
        $data["data_akps"] = $this->m_jenisdata->get_where($where12)->result();
        $data["data_pmd"] = $this->m_jenisdata->get_where($where13)->result();
        $data["data_ppkb"] = $this->m_jenisdata->get_where($where14)->result();
        $data["data_hub"] = $this->m_jenisdata->get_where($where15)->result();
        $data["data_ki"] = $this->m_jenisdata->get_where($where16)->result();
        $data["data_ku"] = $this->m_jenisdata->get_where($where17)->result();
        $data["data_pm"] = $this->m_jenisdata->get_where($where18)->result();
        $data["data_ko"] = $this->m_jenisdata->get_where($where19)->result();
        $data["data_keb"] = $this->m_jenisdata->get_where($where20)->result();
        $data["data_perpus"] = $this->m_jenisdata->get_where($where21)->result();
        $data["data_arsip"] = $this->m_jenisdata->get_where($where22)->result();

        $this->load->view('home',$data);
    } 

    function data(){
        $data["data"] = $this->m_jenisdata->data()->result();

        $this->load->view("data",$data);
    }

    function jenisdata(){
        $where = array("jenis_data" => $this->input->post("id_data"));
        $where2 = array("id" => $this->input->post("id_bidang"));
        $where3 = array("id" => $this->input->post("id_data"));
        
        $data["simpatik"] = $this->m_simpatik->simpatik($where)->result();
        $data["bidang"] = $this->m_bidang->get_where($where2)->result();
        $jenisdata = $this->m_jenisdata->get_where($where3)->row();
        $data["jenisdata"] = $jenisdata->jenis_data;

        $this->load->view("simpatik",$data);
    }
    
    //Wilayah
    function kasemen_1(){
        $data['title']="Wilayah Kecamatan Kasemen";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/kasemen";
        $this->load->view('home2',$data);
    }
    
    function serang_2(){
        $data['title']="Wilayah Kecamatan Serang";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/serang";
        $this->load->view('home2',$data);
    }
    
     function taktakan_3(){
        $data['title']="Wilayah Kecamatan Taktakan";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/taktakan";
        $this->load->view('home2',$data);
    }
    
     function cipocokjaya_4(){
        $data['title']="Wilayah Kecamatan Cipocok Jaya";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/cipocokjaya";
        $this->load->view('home2',$data);
    }
    
     function walantaka_5(){
        $data['title']="Wilayah Kecamatan Walantaka";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/walantaka";
        $this->load->view('home2',$data);
    }
    
    function curug_6(){
        $data['title']="Wilayah Kecamatan Curug";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/curug";
        $this->load->view('home2',$data);
    }

    function kotaserang_7(){
        $data['title']="Wilayah Kota Serang";
        $data["bidang"] = "";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']="";
        $data['konten']="frontend/wilayah/kotaserang";
        $this->load->view('home2',$data);
    }
    
    function search(){
        $wilayah=$this->input->post('wilayah');
        $bidang=$this->input->post('bidang');
        $tahun=$this->input->post('tahun');
        $triwulan=$this->input->post('triwulan');
                
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['q_simpatik']=$this->m_simpatik->tampil_search($wilayah,$bidang,$tahun,$triwulan)->result();
        $data["wilayah"] = $wilayah;
        $data["bidang"] = $bidang;
        $data["tahun"] = $tahun;
        $data["triwulan"] = $triwulan;
        
        switch($wilayah){
            case 1;
                $wil="serang";
                $data['title']="Wilayah Kecamatan Serang";
                break;
            case 2;
                $wil="curug";
                $data['title']="Wilayah Kecamatan Curug";
                break;
            case 3:
                $wil="taktakan";
                $data['title']="Wilayah Kecamatan Taktakan";
                break;
            case 4:
                $wil="walantaka";
                $data['title']="Wilayah Kecamatan Walantaka";
                break;
            case 5:
                $wil="cipocokjaya";
                $data['title']="Wilayah Kecamatan Cipocok Jaya";
                break;
            case 6:
                $wil="kasemen";
                $data['title']="Wilayah Kecamatan Kasemen";
                break;
            case 7:
                $wil="kotaserang";
                $data['title']="Wilayah Kota Serang";
                break;
         }
        
        $data['konten']="frontend/wilayah/$wil";
        $this->load->view('home2',$data);
    }
    
    function pdf(){  
        $wilayah=$this->input->get('wilayah');
        $bidang=$this->input->get('bidang');
        $tahun=$this->input->get('tahun');
        $triwulan=$this->input->get('triwulan');
        
        switch($wilayah){
            case 1;
                $data['title']="Wilayah Kecamatan Serang";
                break;
            case 2;
                $data['title']="Wilayah Kecamatan Curug";
                break;
            case 3:
                $data['title']="Wilayah Kecamatan Taktakan";
                break;
            case 4:
                $data['title']="Wilayah Kecamatan Walantaka";
                break;
            case 5:
                $data['title']="Wilayah Kecamatan Cipocok Jaya";
                break;
            case 6:
                $wil="kasemen";
                $data['title']="Wilayah Kecamatan Kasemen";
                break;
            case 7:
                $wil="kotaserang";
                $data['title']="Wilayah Kota Serang";
                break;
         }
        
        $data['tahun']=$tahun;
        $data['q_simpatik']=$this->m_simpatik->cetak_pdf($wilayah,$bidang,$tahun,$triwulan)->result();
        $this->load->view('frontend/pdf/cetakpdf', $data);
        $sumber=$this->load->view('frontend/pdf/cetakpdf', $data, TRUE);
        $html=$sumber;
 
        $pdfFilePath="simpatik.pdf";
        
        //lokasi file css yang akan di load
        $css = base_url()."simpatik_files/bootstrap.css";
        $stylesheet = file_get_contents($css);
 
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('frontend/pdf/cetakpdf', $data, TRUE);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        
        exit();
    }
    
    function submit_form(){
        if($this->input->post('sbm') == "Cari") { 
            $this->search();
        }
    }

    function submit_form_pdf(){
        if($this->m_simpatik->submit_form_pdf()){
            echo "OK";
        }
        else{
            echo "Gagal";
        }
    }

    function submit_pdf(){
        $this->pdf();
    }
    
    
    // GRAFIK 
    function grafik(){
        $data['title']="Grafik";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data['konten']="frontend/grafik/index";
        $this->load->view('home3',$data);
    }
    
    public function get_grafik() { 
        $bidang=$this->input->post('bidang');
        $jenisdata=$this->input->post('jenisdata');
        $tahun_awal=$this->input->post('tahun_awal');
        $tahun_akhir=$this->input->post('tahun_akhir');
        $model=$this->input->post('model');
        
        $data['x']=$bidang;
        $data['y']=$jenisdata;
        $data['z']=$tahun_awal;
        $data['u']=$tahun_akhir;
        $data["bidang"] = $this->input->post("bidang");
        $data["jenisdata"] = $this->input->post("jenisdata");
        $data["tahun_awal"] = $this->input->post("tahun_awal");
        $data["tahun_akhir"] = $this->input->post("tahun_akhir");
        $data["model"] = $this->input->post("model");

        $where = array(
            "id_bidang" => $bidang
        );
        
        $data['title']="Grafik Model ";
        $data['q_bidang']=$this->m_bidang->tampil_bidang();
        $data["q_jenisdata"]=$this->m_jenisdata->tampil_jenisdata_where($where);

        $grafik = $this->m_simpatik->get_all_grafik($bidang,$jenisdata,$tahun_awal,$tahun_akhir);
        $json = array();
        foreach($grafik as $g){
            $sikondang["jumlah"] = $g->jumlah;

            array_push($json, $sikondang);
        }
        $push = json_encode($json);
        file_put_contents("data.json", $push);

        $data['konten']="frontend/grafik/grafik";
        
        $this->load->view('home4',$data);
     } 
     
     //ambil data dari AJAX View
     public function getdata($bidang,$jenisdata,$tahun_awal,$tahun_akhir) { 
        $data = $this->m_simpatik->get_all_grafik($bidang,$jenisdata,$tahun_awal,$tahun_akhir);
        
        //data to json 
        if(!$data==""){
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->nama_wilayah", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            
            } 
 
        echo json_encode($responce); 
        
        } else { echo json_encode('Tidak ada data'); }
        
     }
    
    //dropdown jenisdata
    public function pilih_jenisdata($idbidang){                
            $data['q_jenisdata']=$this->m_jenisdata->ambil_jenisdata($idbidang);
            $this->load->view('dropdown/v_drop_down_jenisdata', $data);
    }
    
    function submit_grafik(){
        if($this->m_simpatik->submit_grafik()){
            echo "OK";
        }
        else{
            echo "Gagal";
        }
    }
}