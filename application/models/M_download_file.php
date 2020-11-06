<?php
class M_download_file extends CI_Model{
   private $table="tb_file_download";
    
   function cek($username,$password,$aktip){
        $this->db->where("email",$username);
        $this->db->where("password",$password);
        $this->db->where("aktip",$aktip);
        return $this->db->get($this->table);
    }
    
    function semua($config){
        return $this->db->get($this->table, $config['per_page'], $this->uri->segment(3));
    }

    function get_where($where){
        return $this->db->get_where("tb_upload",$where);
    }
    
    function all(){
        $this->db->select("tb_file_download.*, tb_upload.file");
        $this->db->from($this->table);
        $this->db->join("tb_upload", "tb_file_download.id_upload = tb_upload.id_upload", "left");

        return $this->db->get();
    }

    function download(){
        date_default_timezone_set("Asia/Jakarta");

        $cek = $this->db->get_where("tb_upload", array("id_upload" => $this->input->post("id_upload")))->row();
        $kategori = "";

        if($cek->kategori == "1"){
            $kategori = "KSDA";
        }
        elseif($cek->kategori == "2"){
            $kategori = "PDRB Kecamatan";
        }
        elseif($cek->kategori == "3"){
            $kategori = "PDRB Tahunan";
        }
        elseif($cek->kategori == "4"){
            $kategori = "PDRB Triwulanan";
        }

        $nama_file = $kategori."/".$cek->nama_file."/".$cek->file;

        $data["non_xss"] = array(
            "id_upload" => $this->input->post("id_upload"),
            "nama" => htmlentities($this->input->post("nama")),
            "gender" => htmlentities($this->input->post("gender")),
            "usia" => htmlentities($this->input->post("usia")),
            "email" => htmlentities($this->input->post("email")),
            "pekerjaan" => htmlentities($this->input->post("pekerjaan")),
            "pendidikan" => htmlentities($this->input->post("pendidikan")),
            "keperluan" => htmlentities($this->input->post("keperluan")),
            "membuka" => htmlentities($this->input->post("membuka")),
            "membantu" => htmlentities($this->input->post("membantu")),
            "saran" => htmlentities($this->input->post("saran")),
            "nama_file" => $nama_file,
            "created_date" => date("Y-m-d H:i:s")
        );

        $data["xss_clean"] = $this->security->xss_clean($data["non_xss"]);

        if($this->db->insert("tb_file_download", $data["xss_clean"])){
            return true;
        }
        else{
            return false;
        }
    }
            
    function cekKode($kode){
        $this->db->where("id",$kode);
        return $this->db->get($this->table);
    }
    
    function cekId($kode){
        $this->db->where("id",$kode);
        return $this->db->get($this->table);
    }
    
    function update($id,$info){
        $this->db->where("id",$id);
        $this->db->update($this->table,$info);
    }
       
    function simpan($info){
        $this->db->insert($this->table,$info);
    }
    
    function hapus($id){
        $this->db->where("id",$id);
        $this->db->delete($this->table);
    }
    
    function cari($keyword)
    {
        $this->db->select('*');
        $this->db->like('nama_bidang',$keyword);
        return $this->db->get($this->table);
    }
    
    //
    function add_account($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
  
    //Aktipasi akun
    function changeActiveState($key)
    {
        $data = array(
            'aktip'=>1
         );
        
        $this->db->where('ket_pass', $key);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

    function get_ksda(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "KSDA", "after");

        return $this->db->get();
    }

    function get_pdrb_kec(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "PDRB Kecamatan", "after");

        return $this->db->get();
    }

    function get_pdrb_tahun(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "PDRB Tahunan", "after");

        return $this->db->get();
    }

    function get_pdrb_tri(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "PDRB Triwulanan", "after");

        return $this->db->get();
    }

    function get_pdf(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "PDF", "after");

        return $this->db->get();
    }

    function get_grafik(){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->like("nama_file", "Cetak GRAFIK", "after");

        return $this->db->get();
    }
}