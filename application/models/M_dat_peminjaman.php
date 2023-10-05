<?php

class M_dat_peminjaman extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.*, b.anggota_nm FROM dat_peminjaman a 
            LEFT JOIN mst_anggota b ON a.anggota_id = b.anggota_id";
        return $this->db->query($sql)->result_array();
    }
    /**
     * get data by id peminjaman
     */
    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM dat_peminjaman a WHERE a.peminjaman_id = '$id'";
        return $this->db->query($sql)->row_array();
    }

    // get data by id detail pinjam
    public function get_byid_detailpinjam($id){
        $sql = "SELECT a.* FROM dat_detail_peminjaman a WHERE a.detailpinjam_id = '$id'";
        return $this->db->query($sql)->result_array();
    
    }
    /**
     * save data
     */
    public function save_peminjaman($data){
        $this->db->insert('dat_peminjaman', $data);
    }
    /**
     * edit data
     */
    public function change_peminjaman($id, $data){
        $this->db->where('peminjaman_id', $id)->update('dat_peminjaman', $data);
    }
    /**
     * delete data
     */
    public function delete_peminjaman($id){
        $this->db->where('peminjaman_id', $id)->delete('dat_peminjaman');
    }
    /**
     * count
     */
    public function count_data_peminjaman(){
        return $this->db->from('dat_peminjaman')->count_all_results();
    }
    
}