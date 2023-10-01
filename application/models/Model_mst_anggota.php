<?php

class Model_mst_anggota extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('mst_anggota');
	}

	public function tambah_mst_anggota($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{

		/*var_dump($where,$table);
		die;*/
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data, $table)
	{
		// var_dump($where,$data, $table);
		// die;
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail_brg($id_brg)
	{
		$result = $this->db->where('id_brg', $id_brg)->get('mst_anggota');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}
}