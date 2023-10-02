<?php

class M_detail_pinjam extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.* FROM dat_detail_pinjam a ";
        return $this->db->query($sql)->result_array();
    }
    /**
     * get data by id
     */
    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM dat_detail_pinjam a WHERE a.detail_pinjam_id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    /**
     * save data
     */
    public function save_kategory($data){
        $this->db->insert('dat_detail_pinjam', $data);
    }
    /**
     * edit data
     */
    public function change_detail_pinjam($id, $data){
        $this->db->where('detail_pinjam_id', $id)->update('dat_detail_pinjam', $data);
    }
    /**
     * delete data
     */
    public function delete_detail_pinjam($id){
        $this->db->where('detail_pinjam_id', $id)->delete('dat_detail_pinjam');
    }
}