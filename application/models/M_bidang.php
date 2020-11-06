<?php
class M_bidang extends CI_Model{
    private $table="tb_bidang_urusan";
       
    function semua(){
        return $this->db->get($this->table);
    }
    
    function all(){
        return $this->db->get($this->table);
    }

    function get_where($where){
        return $this->db->get_where($this->table, $where);
    }
    
    function tampil_bidang(){
            $q_bidang=$this->db->get($this->table);
            if($q_bidang->num_rows()>0){

            $result = array('' => '- Pilih Bidang -');
            foreach ($q_bidang->result_array() as $row)
            {
                $result[$row['id']]= ucwords(strtolower($row['nama_bidang']));
            }   
		} else {
		     $result['-']= '- Belum Ada Bidang -';
		}
           return $result;
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
}