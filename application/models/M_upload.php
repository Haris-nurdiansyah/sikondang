<?php
    class M_upload Extends CI_Model{
        function get_all(){
            return $this->db->get("tb_upload");
        }

        function simpan($insert){
            if($this->db->insert("tb_upload", $insert)){
                return true;
            }
            else{
                return false;
            }
        }

        function get_where($id){
            return $this->db->get_where("tb_upload", array("id_upload" => $id));
        }

        function edit_detail(){
            $data["non_xss"] = array(
                "nama_file" => htmlentities($this->input->post("nama_file")),
                "kategori" => $this->input->post("kategori"),
                "tahun_file" => htmlentities($this->input->post("tahun_file")),
                "status" => $this->input->post("status")
            );

            $data["xss_clean"] = $this->security->xss_clean($data["non_xss"]);

            if($this->db->update("tb_upload", $data["xss_clean"], array("id_upload" => $this->input->post("id_upload")))){
                return true;
            }
            else{
                return false;
            }
        }

        function hapus_file($id_upload){
            if($this->db->delete("tb_upload", array("id_upload" => $id_upload))){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>