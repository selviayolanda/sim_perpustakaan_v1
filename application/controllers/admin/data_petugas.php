<?php

class data_petugas extends CI_Controller
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
		// $data['petugas'] = $this->Model_petugas->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_petugas');
		$this->load->view('templates_admin/footer');
	}

	// public function tambah_aksi()
	// {
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_petugas = $this->input->post('nama_petugas');

    //     $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_petugas' => $nama_petugas
    //     );

    //     $this->Model_petugas->tambah_petugas($data, 'petugas');
    //     redirect('admin/data_petugas/index');
	// }
	// public function edit($id)
	// {
	// 	$where = array('id_petugas' => $id);
	// 	$data['petugas'] = $this->Model_petugas->edit_data($where, 'petugas')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_petugas', $data);
	// 	$this->load->view('templates_admin/footer');
	// }

	// public function update(){
	// 	$kode_buku = $this->input->post('kode_buku');
	// 	$nama_petugas = $this->input->post('nama_petugas');

    //     $data = array (
    //         'kode_buku' => $kode_buku,
    //         'nama_petugas' => $nama_petugas
    //     );

	// 	$where = array(
	// 		'id_petugas' => $id, 
	// 	);
	// 	$this->Model_petugas->update_data($where, $data, 'petugas');
	// 	redirect('admin/data_petugas/index');
	// }

	// public function hapus($id){
	// 	$where = array('id_petugas' => $id);
	// 	$this->Model_petugas->hapus_data($where, 'petugas');
	// 	redirect('admin/data_petugas/index');
	// }
}