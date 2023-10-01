<?php

class data_anggota extends CI_Controller
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
		
		// $data['anggota'] = $this->Model_anggota->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_anggota');
		$this->load->view('templates_admin/footer');
	}

	// public function tambah_aksi()
	// {
	// 	$nama_anggota = $this->input->post('nama_anggota');
	// 	$jenis_kelamin = $this->input->post('jenis_kelamin');
	// 	$alamat = $this->input->post('alamat');
	// 	$no_telp = $this->input->post('no_telp');

    //     $data = array (
    //         'nama_anggota' => $nama_anggota,
    //         'jenis_kelamin' => $jenis_kelamin,
    //         'alamat' => $alamat,
    //         'no_telp' => $no_telp
    //     );

    //     $this->Model_anggota->tambah_anggota($data, 'anggota');
    //     redirect('admin/data_anggota/index');
	// }
	// public function edit($id)
	// {
	// 	$where = array('id_anggota' => $id);
	// 	$data['anggota'] = $this->Model_anggota->edit_data($where, 'anggota')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_anggota', $data);
	// 	$this->load->view('templates_admin/footer');
	// }

	// public function update(){
	// 	// $where = array('id_anggota' => $id);
	// 	$id_anggota= $this->input->post('id_anggota');
	// 	$nama_anggota = $this->input->post('nama_anggota');
	// 	$jenis_kelamin = $this->input->post('jenis_kelamin');
	// 	$alamat = $this->input->post('alamat');
	// 	$no_telp = $this->input->post('no_telp');

    //     $data = array (
    //         'nama_anggota' => $nama_anggota,
    //         'jenis_kelamin' => $jenis_kelamin,
    //         'alamat' => $alamat,
    //         'no_telp' => $no_telp
    //     );

	// 	$where = array(
	// 		'id_anggota' => $id_anggota,
	// 	);
	// 	$this->Model_anggota->update_data($where, $data, 'anggota');
	// 	redirect('admin/data_anggota');
	// }

	// public function hapus($id){
	// 	$where = array('id_anggota' => $id);
	// 	$this->Model_anggota->hapus_data($where, 'anggota');
	// 	redirect('admin/data_anggota/index');
	// }
}