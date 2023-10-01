<?php

class Model_mst_kategori extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('mst_kategori');
	}

	public function tambah_mst_kategori($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
	    $result = $this->db->where('id_brg', $id)
	                       ->limit(1)
	                       ->get('mst_kategori');

	    if ($result->num_rows() > 0) {
	        return $result->row();
	    } else {
	        return array();
	    }
	}

	public function detail_brg($id_brg)
	{
		$result = $this->db->where('id_brg', $id_brg)->get('mst_kategori');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}
}