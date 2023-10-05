<?php 

class M_anggota extends CI_Model{
    /**
     * get all data
     */
    public function get_data_all(){
        $sql = "SELECT a.* FROM mst_anggota a";
        return $this->db->query($sql)->result_array();
    }

    public function get_data_whereId($id){
        $sql = "SELECT a.* FROM mst_anggota a WHERE a.anggota_id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    public function change_anggota($id, $data){
        $this->db->where('anggota_id', $id)->update('mst_anggota', $data);
    }
    /**
     * save data
     */
    public function save_anggota($data){
        $this->db->insert('mst_anggota', $data);
    }
    /**
     * delete data
     */
    public function delete_anggota($id){
        $this->db->where('anggota_id', $id)->delete('mst_anggota');
    }
    /**
     * count data
     */
    public function count_data_anggota(){
        return $this->db->from('mst_anggota')->count_all_results();
    }
}