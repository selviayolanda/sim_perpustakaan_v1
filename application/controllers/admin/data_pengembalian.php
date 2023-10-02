<?php

class data_pengembalian extends CI_Controller
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
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_pengembalian');
    $this->load->view('templates_admin/footer');
  }

//   public function tambah_pengembalian()
//   {
//     // $anggota = $this->Model_anggota->get()->result();
//     $tanggal_pinjam = $this->input->post('tanggal_pinjam');
//     $tanggal_kembali = $this->input->post('tanggal_kembali');
//     $id_buku = $this->input->post('id_buku');
//     $id_anggota = $this->input->post('id_anggota');
//     $status = $this->input->post('status');
//     $keterangan = $this->input->post('keterangan');

//         $data = array (
//             'tanggal_pinjam' => $tanggal_pinjam,
//             'tanggal_kembali' => $tanggal_kembali,
//             'id_buku' => $id_buku,
//             'id_anggota' => $id_anggota,
//             'status' => $status,
//             'keterangan' => $keterangan
//         );

//         $this->Model_pengembalian->tambah_pengembalian($data, 'pengembalian');
//         $this->load->view('templates_admin/header');
//         $this->load->view('templates_admin/sidebar');
//         $this->load->view('admin/data_pengembalian', $data);
//         $this->load->view('templates_admin/footer');
//         redirect('admin/data_pengembalian/index');
//   }
//   public function edit($id)
//   {
//     $where = array('id_pengembalian' => $id);
//     $data['pengembalian'] = $this->Model_pengembalian->edit_data($where, 'pengembalian')->result();
//     $this->load->view('templates_admin/header');
//     $this->load->view('templates_admin/sidebar');
//     $this->load->view('admin/edit_pengembalian', $data);
//     $this->load->view('templates_admin/footer');
//   }

//   public function update(){
//     $kode_buku = $this->input->post('kode_buku');
//     $nama_pengembalian = $this->input->post('nama_pengembalian');

//         $data = array (
//             'kode_buku' => $kode_buku,
//             'nama_pengembalian' => $nama_pengembalian
//         );

//     $where = array(
//       'id_pengembalian' => $id, 
//     );
//     $this->Model_pengembalian->update_data($where, $data, 'pengembalian');
//     redirect('admin/data_pengembalian/index');
//   }

//   public function hapus($id){
//     $where = array('id_pengembalian' => $id);
//     $this->Model_pengembalian->hapus_data($where, 'pengembalian');
//     redirect('admin/data_pengembalian/index');
//   }

//   public function pengembalian($id){

//     //   public function update_data($where,$data, $table)
//     // {
//     // 	$this->db->where($where);
//     // 	$this->db->update($table, $data);
//     // }
    
//     redirect('admin/data_pengembalian');
//   }

//   public function jumlah_buku()
//   {
//     $id = $this->input->post('id');
//     $this->Model_pengembalian->jumlah_buku($id);
//     echo json_encode($data);
//   }

//   public function kembalikan ($id)
//   {
//     $data = $this->Model_pengembalian->getDataById_pengembalian($id);
//     // var_dump($data);
    
//   }


// /**
//  * function kembalikan buku yang di pinjam
//  */
// public function kembalikanBuku($id)
// {
//   // $data = $this->Model_pengembalian->getWhereId($id);
//   $data_update = array(
//     'tanggal_pengembalian' => @$this->input->post('tanggal_pengembalian'),
//   );
//   $this->Model_pengembalian->update_data($id, $data_update, 'pengembalian');
//   redirect(site_url() . '/admin/data_pengembalian');
// }


}