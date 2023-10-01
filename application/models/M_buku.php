<?php

class M_buku extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.*, b.kategori_nm FROM mst_buku a 
            LEFT JOIN mst_kategori b ON a.kategori_id = b.kategori_id";
        return $this->db->query($sql)->result_array();
    }
    /**
     * get data by id
     */
    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM mst_buku a WHERE a.buku_id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    /**
     * save data
     */
    public function save_buku($data){
        $this->db->insert('mst_buku', $data);
    }
    /**
     * edit data
     */
    public function change_buku($id, $data){
        $this->db->where('buku_id', $id)->update('mst_buku', $data);
    }
    /**
     * delete data
     */
    public function delete_buku($id){
        $this->db->where('buku_id', $id)->delete('mst_buku');
    }
    /**
     * count
     */
    public function count_data_buku(){
        return $this->db->from('mst_buku')->count_all_results();
    }
    
}