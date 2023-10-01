<?php

class M_petugas extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.*, b.role_nm FROM mst_petugas a
            LEFT JOIN mst_role_user b ON a.role_id = b.role_id";
        return $this->db->query($sql)->result_array();
    }
    /**
     * save data
     */
    public function save_petugas($data){
        $this->db->insert('mst_petugas', $data);
    }
    /**
     * delete data
     */
    public function delete_petugas($id){
        $this->db->where('petugas_id', $id)->delete('mst_petugas');
    }
}