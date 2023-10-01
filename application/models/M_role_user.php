<?php

class M_role_user extends CI_Model{
    /**
     * get data order by created_at DESC
     */
    public function get_data_all(){
        $sql = "SELECT a.* FROM mst_role_user a ORDER BY a.created_at DESC";
        return $this->db->query($sql)->result_array();
    }
    /**
     * save data
     */
    public function save_role($data){
        $this->db->insert('mst_role_user', $data);
    }
    /**
     * delete data
     */
    public function delete_role($id){
        $this->db->where('role_id', $id)->delete('mst_role_user');
    }
}