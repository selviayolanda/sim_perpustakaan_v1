<?php

class data_peminjaman extends CI_Controller
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
    $this->load->view('admin/data_peminjaman');
    $this->load->view('templates_admin/footer');
  }

//   public function tambah_peminjaman()
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

//         $this->Model_peminjaman->tambah_peminjaman($data, 'peminjaman');
//         $this->load->view('templates_admin/header');
//         $this->load->view('templates_admin/sidebar');
//         $this->load->view('admin/data_peminjaman', $data);
//         $this->load->view('templates_admin/footer');
//         redirect('admin/data_peminjaman/index');
//   }
//   public function edit($id)
//   {
//     $where = array('id_peminjaman' => $id);
//     $data['peminjaman'] = $this->Model_peminjaman->edit_data($where, 'peminjaman')->result();
//     $this->load->view('templates_admin/header');
//     $this->load->view('templates_admin/sidebar');
//     $this->load->view('admin/edit_peminjaman', $data);
//     $this->load->view('templates_admin/footer');
//   }

//   public function update(){
//     $kode_buku = $this->input->post('kode_buku');
//     $nama_peminjaman = $this->input->post('nama_peminjaman');

//         $data = array (
//             'kode_buku' => $kode_buku,
//             'nama_peminjaman' => $nama_peminjaman
//         );

//     $where = array(
//       'id_peminjaman' => $id, 
//     );
//     $this->Model_peminjaman->update_data($where, $data, 'peminjaman');
//     redirect('admin/data_peminjaman/index');
//   }

//   public function hapus($id){
//     $where = array('id_peminjaman' => $id);
//     $this->Model_peminjaman->hapus_data($where, 'peminjaman');
//     redirect('admin/data_peminjaman/index');
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
//     $this->Model_peminjaman->jumlah_buku($id);
//     echo json_encode($data);
//   }

//   public function kembalikan ($id)
//   {
//     $data = $this->Model_peminjaman->getDataById_peminjaman($id);
//     // var_dump($data);
    
//   }


// /**
//  * function kembalikan buku yang di pinjam
//  */
// public function kembalikanBuku($id)
// {
//   // $data = $this->Model_peminjaman->getWhereId($id);
//   $data_update = array(
//     'tanggal_pengembalian' => @$this->input->post('tanggal_pengembalian'),
//   );
//   $this->Model_peminjaman->update_data($id, $data_update, 'peminjaman');
//   redirect(site_url() . '/admin/data_pengembalian');
// }


}