<?php

class M_kategori extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.* FROM mst_kategori a ";
        return $this->db->query($sql)->result_array();
    }
    /**
     * get data by id
     */
    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM mst_kategori a WHERE a.kategori_id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    /**
     * save data
     */
    public function save_kategory($data){
        $this->db->insert('mst_kategori', $data);
    }
    /**
     * edit data
     */
    public function change_kategori($id, $data){
        $this->db->where('kategori_id', $id)->update('mst_kategori', $data);
    }
    /**
     * delete data
     */
    public function delete_kategori($id){
        $this->db->where('kategori_id', $id)->delete('mst_kategori');
    }
}