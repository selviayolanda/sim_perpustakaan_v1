<?php

class Model_dat_peminjaman extends CI_Model
{
	public function tampil_data()
	{
		// $this->db->select('*');
		// $this->db->form('*');
		$sql = "SELECT a.*, b.nama_buku, c.nama_anggota FROM dat_peminjaman a
			LEFT JOIN buku b ON a.id_buku = b.id_buku
			LEFT JOIN anggota c ON a.id_anggota = c.id_anggota";
		return $this->db->query($sql)->result_array();
	}

	public function tambah_dat_peminjaman($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function anggota(){
		$sql = "SELECT * FROM anggota ";
		return $this->db->query($sql)->result_array();
	}

	public function buku(){
		$sql = "SELECT * FROM buku ";
		return $this->db->query($sql)->result_array();
	}

	public function pengembalian_date($pengembalian){
		$sql = "SELECT a.* FROM pengembalian a where a.id_pengembalian = $pengembalian";
		return $this->db->query($sql)->row_array();
	}

	public function jumlah_buku($id)
	{
		$this->db->select('jumlah');
		$this->db->from('buku');
		$this->db->where('id_buku', $id);
		return $this->db->get()->row_array();
	}

	public function getDataById_dat_peminjaman($id)
	{
		$this->db->select('*');
		$this->db->from('dat_peminjaman');
		$this->db->join('anggota', 'dat_peminjaman.id_anggota = anggota.id_anggota');
		$this->db->join('buku', 'dat_peminjaman.id_buku = buku.id_buku');
		$this->db->where('dat_peminjaman.id_dat_peminjaman', $id);
		return $this->db->get()->row_array();
	}

	public function getWhereId($id){
		$sql = "SELECT a.* FROM dat_peminjaman a where a.id_dat_peminjaman = '$id'";
		return $this->db->query($sql)->row_array();
	}

	public function getSetPengembalian($where, $data, $table){
		$this->db->where('id_dat_peminjaman',$where)->update($table, $data);
	}

	/**
	 * start script new version 2
	 */
	public function getDataAll(){
		$sql = "SELECT a.* FROM dat_peminjaman a ";
		return $this->db->query($sql)->result_array();
	}

	public function getDataAll2(){
		$sql = "SELECT a.* FROM dat_detail_peminjaman a ";
		return $this->db->query($sql)->result_array();
	}
	
}