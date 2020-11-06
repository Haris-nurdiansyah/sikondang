<?php
class M_jenisdata extends CI_Model{
    private $table="tb_jenis_data";
       
    function semua(){
        return $this->db->get($this->table);
    }
    
    function all(){
        return $this->db->get($this->table);
    }

    function data(){
        return $this->db->get_where($this->table, array("id_bidang" => $this->input->post("id_bidang")));
    }

    function get_where($where){
        return $this->db->get_where($this->table, $where);
    }

    function tampil_jenisdata_where($where){
        $q_jenisdata=$this->db->get_where($this->table,$where);
        if($q_jenisdata->num_rows()>0){

        $result = array('' => '- Pilih Jenis Data -');
        foreach ($q_jenisdata->result_array() as $row)
        {
            $result[$row['id']]= ucwords(strtolower($row['jenis_data']));
        }   
    } else {
         $result['-']= '- Belum Ada Jenis Data -';
    }
       return $result;
}
    
    function tampil_jenisdata(){
            $q_jenisdata=$this->db->get($this->table);
            if($q_jenisdata->num_rows()>0){

            $result = array('' => '- Pilih Jenis Data -');
            foreach ($q_jenisdata->result_array() as $row)
            {
                $result[$row['id']]= ucwords(strtolower($row['jenis_data']));
            }   
		} else {
		     $result['-']= '- Belum Ada Jenis Data -';
		}
           return $result;
    }
    
    //dropdown jenis data
     public function ambil_jenis($idbidang){
            $this->db->where('id_bidang',$idbidang);
            $this->db->order_by('id','asc');
            $sql_jenis=$this->db->get('tb_jenis_data');
            if($sql_jenis->num_rows()>0){

            $result = array('' => 'Pilih Jenis Data...');
            foreach ($sql_jenis->result_array() as $row)
            {   
                $result[$row['id']]= ucwords(strtolower($row['jenis_data']));
            }
		} else {
		   $result['-']= '- Belum Ada Jenis Data -';
		}
            return $result;  
     }
     
     //dropdown jenisdata
     function ambil_jenisdata($idbidang){
            $this->db->where('id_bidang',$idbidang);
            $this->db->order_by('id','asc');
            $sql_jd = $this->db->get($this->table);
            if($sql_jd->num_rows()>0){

            $result = array('' => 'Pilih Jenis Data..');
            foreach ($sql_jd->result_array() as $row)
            {
            $result[$row['id']]= ucwords(strtolower($row['jenis_data']));
            }   
		} else {
		   $result['-']= '- Belum Ada Jenis data -';
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
        $this->db->like('jenis_data',$keyword);
        return $this->db->get($this->table);
    }
}