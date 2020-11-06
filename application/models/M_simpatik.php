<?php
class M_simpatik extends CI_Model{
    
    private $table="tb_simpatik";
       
    function semua(){
        $this->db->select("tb_simpatik.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->from("tb_simpatik");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');

        return $this->db->get()->num_rows();
    }

    function semua_user(){
        $this->db->select("tb_simpatik_user.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->from("tb_simpatik_user");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik_user.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik_user.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik_user.wilayah','left');

        return $this->db->get();
    }

    function data($number,$offset){
        $this->db->select("tb_simpatik.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');

        return $this->db->get("tb_simpatik", $number, $offset)->result();
    }
    
    function all(){
        return $this->db->get($this->table);
    }

    function simpatik_user(){
        $this->db->select("tb_simpatik_user.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->from("tb_simpatik_user");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik_user.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik_user.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik_user.wilayah','left');

        return $this->db->get();
    }

    function simpatik($where){
        $this->db->select("tb_simpatik.tahun, tb_simpatik.triwulan, tb_simpatik.jumlah, tb_simpatik.satuan, tb_simpatik.sumber_data, tb_simpatik.ket, tb_wilayah.nama_wilayah");
        $this->db->from("tb_simpatik");
        $this->db->where($where);
        $this->db->join("tb_wilayah", "tb_wilayah.id = tb_simpatik.wilayah");
        $this->db->order_by("tahun");
        
        return $this->db->get();
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
    
    function tampil_wilayah(){
            $q_wil=$this->db->get('tb_wilayah');
            if($q_wil->num_rows()>0){

            $result = array('' => '- Pilih Wilayah -');
            foreach ($q_wil->result_array() as $row)
            {
                $result[$row['id']]= ucwords(strtolower($row['nama_wilayah']));
            }   
		} else {
		     $result['-']= '- Belum Ada Wilayah -';
		}
           return $result;
    }
        
    function cekKode($kode){
        $this->db->where("id_simpatik",$kode);
        return $this->db->get($this->table);
    }
    
    function cekId($kode){
        $this->db->where("id_simpatik",$kode);
        return $this->db->get($this->table);
    }

    function cekId_validasi($kode){
        $this->db->where("id_simpatik_user",$kode);
        return $this->db->get("tb_simpatik_user");
    }
    
    function update($id,$info){
        $this->db->where("id_simpatik",$id);
        $this->db->update($this->table,$info);
    }

    function update_validasi($id,$info){
        if($this->input->post("validasi") == "0"){
            $this->db->where("id_simpatik_user",$id);
            $this->db->update("tb_simpatik_user",$info);
        }
        else{
            date_default_timezone_set("Asia/Jakarta");
            $this->db->where("id_simpatik_user",$id);
            $this->db->update("tb_simpatik_user",$info);
            
            $ambil = $this->db->get_where("tb_simpatik_user", array("id_simpatik_user" => $id))->row();
            $updated_date=date("Y-m-d h:i:s");
            $updated_by=$this->session->userdata("nama");

            $data = array(
                "bidang_urusan" => $ambil->bidang_urusan,
                "jenis_data" => $ambil->jenis_data,
                "tahun" => $ambil->tahun,
                "triwulan" => $ambil->triwulan,
                "wilayah" => $ambil->wilayah,
                "jumlah" => $ambil->jumlah,
                "satuan" => $ambil->satuan,
                "sumber_data" => $ambil->sumber_data,
                "created_date" => $ambil->created_date,
                "created_by" => $ambil->created_by,
                "updated_date" =>$updated_date,
                "updated_by" => $updated_by
            );

            $this->db->insert($this->table, $data);
            $this->db->delete("tb_simpatik_user", array("id_simpatik_user" => $id));
        }
    }
    
    function simpan($info){
        if($this->session->userdata("level") == "Admin"){
            $this->db->insert($this->table,$info);
        }
        else{
            $this->db->insert("tb_simpatik_user",$info);
        }
    }
    
    function hapus($kode){
        $this->db->where("id_simpatik",$kode);
        $this->db->delete($this->table);
    }

    function hapus_simpatik_user($kode){
        $this->db->where("id_simpatik_user",$kode);
        $this->db->delete("tb_simpatik_user");
    }
    
    function cari($keyword,$config)
    {
        $this->db->select("tb_simpatik.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');
        $this->db->like('tb_bidang_urusan.nama_bidang',$keyword);
        //return $this->db->get($this->table);
        return $this->db->get($this->table, $config['per_page'], $this->uri->segment(3));
    }
    
    function tampil_search($wilayah,$bidang,$tahun,$triwulan){
        $this->db->select("tb_simpatik.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');
        $this->db->where('tb_simpatik.wilayah',$wilayah);
        $this->db->where('tb_simpatik.bidang_urusan',$bidang);
        $this->db->where('tb_simpatik.tahun',$tahun);
        $this->db->where('tb_simpatik.triwulan',$triwulan);
        return $this->db->get($this->table);
        //return $this->db->get($this->table, $config['per_page'], $this->uri->segment(3));
    }
    
    function cetak_pdf($wilayah,$bidang,$tahun,$triwulan){
        $this->db->select("tb_simpatik.*,tb_bidang_urusan.*,tb_jenis_data.jenis_data,tb_wilayah.nama_wilayah");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');
        $this->db->where('tb_simpatik.wilayah',$wilayah);
        $this->db->where('tb_simpatik.bidang_urusan',$bidang);
        $this->db->where('tb_simpatik.tahun',$tahun);
        $this->db->where('tb_simpatik.triwulan',$triwulan);
        return $this->db->get($this->table);
    }
      
    
    //Sql tampil grafik
    /*
    function tampil_grafik($bidang,$jenisdata,$tahun_awal,$tahun_akhir){
        $query=$this->db->query(
                  "SELECT s.*, s.jenis_data, SUM(s.jumlah) AS jumlah, jd.jenis_data AS jenis, s.tahun AS tahun, w.nama_wilayah AS wilayah "
                . "FROM tb_simpatik AS s "
                . "LEFT JOIN tb_jenis_data as jd "
                . "ON jd.id=s.jenis_data "
                . "LEFT JOIN tb_wilayah as w "
                . "ON w.id=s.wilayah "
                . "WHERE bidang_urusan=$bidang AND s.jenis_data=$jenisdata AND s.tahun BETWEEN '$tahun_awal' AND '$tahun_akhir' "
                . "GROUP BY s.wilayah "
                );
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    } */
    
    public function get_all_grafik($bidang,$jenisdata,$tahun_awal,$tahun_akhir) 
    { 
        $this->db->select("tb_simpatik.*, SUM(tb_simpatik.jumlah) AS jumlah, tb_simpatik.tahun AS tahun, tb_bidang_urusan.*, "
                        . "tb_jenis_data.jenis_data, tb_wilayah.nama_wilayah ");
        $this->db->join('tb_bidang_urusan','tb_bidang_urusan.id=tb_simpatik.bidang_urusan','left');
        $this->db->join('tb_jenis_data','tb_jenis_data.id=tb_simpatik.jenis_data','left');
        $this->db->join('tb_wilayah','tb_wilayah.id=tb_simpatik.wilayah','left');
        $this->db->where('tb_simpatik.bidang_urusan',$bidang);
        $this->db->where('tb_simpatik.jenis_data',$jenisdata);
        $this->db->where('tb_simpatik.tahun >=',$tahun_awal);
        $this->db->where('tb_simpatik.tahun <=',$tahun_akhir);
        $this->db->group_by('tb_simpatik.wilayah');
        
        return $this->db->get('tb_simpatik')->result(); 
    }

    function submit_grafik(){
        date_default_timezone_set("Asia/Jakarta");
        
        $data["non_xss"] = array(
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
            "nama_file" => htmlentities($this->input->post("nama_file")),
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

    function submit_form_pdf(){
        date_default_timezone_set("Asia/Jakarta");
        
        $data["non_xss"] = array(
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
            "nama_file" => htmlentities($this->input->post("nama_file")),
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
    
}


