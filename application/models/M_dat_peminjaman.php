<?php

class M_dat_peminjaman extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.* FROM dat_peminjaman a ";
        return $this->db->query($sql)->result_array();
    }
    /**
     * get data by id
     */
    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM dat_peminjaman a WHERE a.detail_pinjam_id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    /**
     * save data
     */
    public function save_kategory($data){
        $this->db->insert('dat_peminjaman', $data);
    }
    /**
     * edit data
     */
    public function change_detail_pinjam($id, $data){
        $this->db->where('detail_pinjam_id', $id)->update('dat_peminjaman', $data);
    }
    /**
     * delete data
     */
    public function delete_detail_pinjam($id){
        $this->db->where('detail_pinjam_id', $id)->delete('M_dat_peminjaman');
    }
}