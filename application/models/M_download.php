<?php
class M_download extends CI_Model{
   private $table="tb_user_download";
     
   function cek($username,$password,$aktip){
        $this->db->where("email",$username);
        $this->db->where("password",$password);
        $this->db->where("aktip",$aktip);
        return $this->db->get($this->table);
    }

    function get_ksda_2014(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2014", "status" => 1));
    }
    function get_ksda_2015(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2015", "status" => 1));
    }
    function get_ksda_2016(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2016", "status" => 1));
    }
    function get_ksda_2017(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2017", "status" => 1));
    }
    function get_ksda_2018(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2018", "status" => 1));
    }
    function get_ksda_2019(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2019", "status" => 1));
    }
    function get_ksda_2020(){
        return $this->db->get_where("tb_upload", array("kategori" => 1, "tahun_file" => "2020", "status" => 1));
    }

    function get_pdrb_kec(){
        return $this->db->get_where("tb_upload", array("kategori" => 2, "status" => 1));
    }

    function get_pdrb_tahunan(){
        return $this->db->get_where("tb_upload", array("kategori" => 3, "status" => 1));
    }

    function get_pdrb_tri_2014(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2014", "status" => 1));
    }
    function get_pdrb_tri_2015(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2015", "status" => 1));
    }
    function get_pdrb_tri_2016(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2016", "status" => 1));
    }
    function get_pdrb_tri_2017(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2017", "status" => 1));
    }
    function get_pdrb_tri_2018(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2018", "status" => 1));
    }
    function get_pdrb_tri_2019(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2019", "status" => 1));
    }
    function get_pdrb_tri_2020(){
        return $this->db->get_where("tb_upload", array("kategori" => 4, "tahun_file" => "2020", "status" => 1));
    }

    function get_preview(){
        return $this->db->get_where("tb_upload", array("id_upload" => $this->input->post("id_upload")));
    }

    function semua(){
        return $this->db->get($this->table);
    }
    
    function all(){
        return $this->db->get($this->table);
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
    
    function hapus($kode){
        $this->db->where("id",$kode);
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
}