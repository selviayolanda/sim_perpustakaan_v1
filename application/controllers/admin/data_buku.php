<?php

class data_buku extends CI_Controller
{	
	public function __construct()
	{
		parent:: __construct();
		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Anda belum login
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		  redirect('auth/login');
		}
	}
	public function index()
	{
		// $data['buku'] = $this->Model_mst_buku->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku');
		$this->load->view('templates_admin/footer');
	}

	// public function tambah_aksi()
	// {
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_buku = $this->input->post('nama_buku');
	// 	$id_kategori = $this->input->post('id_kategori');
    //     $penulis_buku = $this->input->post('penulis_buku');
	// 	$penerbit_buku = $this->input->post('penerbit_buku');
	// 	$tahun_penerbit = $this->input->post('tahun_penerbit');
	// 	$stok = $this->input->post('stok');

    //     $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_buku' => $nama_buku,
    //         'id_kategori' => $id_kategori,
    //         'penulis_buku' => $penulis_buku,
    //         'penerbit_buku' => $penerbit_buku,
    //         'tahun_penerbit' => $tahun_penerbit,
    //         'stok' => $stok
    //     );

    //     $this->Model_mst_buku->tambah_buku($data, 'buku');
    //     redirect('admin/data_buku/index');
	// }
	// public function edit($id)
	// {
	// 	$where = array('id_buku' => $id);
	// 	$data['buku'] = $this->Model_mst_buku->edit_data($where, 'buku')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_buku', $data);
	// 	$this->load->view('templates_admin/footer');
	// }

	// public function update(){
	// 	// $where = array('id_buku' => $id);
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_buku = $this->input->post('nama_buku');
	// 	$id_kategori = $this->input->post('id_kategori');
    //     $penulis_buku = $this->input->post('penulis_buku');
	// 	$penerbit_buku = $this->input->post('penerbit_buku');
	// 	$tahun_penerbit = $this->input->post('tahun_penerbit');
	// 	$stok = $this->input->post('stok');

	// 	 $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_buku' => $nama_buku,
    //         'id_kategori' => $id_kategori,
    //         'penulis_buku' => $penulis_buku,
    //         'penerbit_buku' => $penerbit_buku,
    //         'tahun_penerbit' => $tahun_penerbit,
    //         'stok' => $stok
    //     );

	// 	$where = array(
	// 		'id_buku' => $id_bku, 
	// 	);
	// 	$this->Model_mst_buku->update_data($where, $data, 'buku');
	// 	redirect('admin/data_buku');
	// }

	// public function hapus($id){
	// 	$where = array('id_buku' => $id);
	// 	$this->Model_mst_buku->hapus_data($where, 'buku');
	// 	redirect('admin/data_buku/index');
	// }
}