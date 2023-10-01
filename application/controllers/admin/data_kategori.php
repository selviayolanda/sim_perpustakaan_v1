<?php

class data_kategori extends CI_Controller
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
		// $data['kategori'] = $this->Model_kategori->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_kategori');
		$this->load->view('templates_admin/footer');
	}

	// public function tambah_aksi()
	// {
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_kategori = $this->input->post('nama_kategori');

    //     $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_kategori' => $nama_kategori
    //     );

    //     $this->Model_kategori->tambah_kategori($data, 'kategori');
    //     redirect('admin/data_kategori/index');
	// }
	// public function edit($id)
	// {
	// 	$where = array('id_kategori' => $id);
	// 	$data['kategori'] = $this->Model_kategori->edit_data($where, 'kategori')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_kategori', $data);
	// 	$this->load->view('templates_admin/footer');
	// }

	// public function update(){
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_kategori = $this->input->post('nama_kategori');

    //     $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_kategori' => $nama_kategori
    //     );

	// 	$where = array(
	// 		'id_kategori' => $id, 
	// 	);
	// 	$this->Model_kategori->update_data($where, $data, 'kategori');
	// 	redirect('admin/data_kategori/index');
	// }

	// public function hapus($id){
	// 	$where = array('id_kategori' => $id);
	// 	$this->Model_kategori->hapus_data($where, 'kategori');
	// 	redirect('admin/data_kategori/index');
	// }
}