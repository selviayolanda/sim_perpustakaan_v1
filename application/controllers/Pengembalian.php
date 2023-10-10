<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pengembalian extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_dat_peminjaman');
        $this->load->model('M_anggota');
    }

    /**
     * function index
     * function yang pertama kali tampil atau di jalankan
     */
	public function index()
	{   
		$data['peminjaman'] = $this->M_dat_peminjaman->get_data_all();
		// $data['anggota'] = $this->M_anggota->get_data_all();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/pengembalian/index', $data);
		$this->load->view('templates_admin/footer');
	}

    /**
     * function cari data
     */
    public function search_peminjam(){
        $id = $this->input->post('peminjaman_id');
        if($id != ''){
            $data['peminjaman'] = $this->M_dat_peminjaman->get_byid_anggotapeminjaman($id);
            $data['buku_pinjam'] = $this->M_dat_peminjaman->get_byid_detailpinjam($id);
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('page/pengembalian/view_pengembalian', $data);
            $this->load->view('templates_admin/footer');
        }else{
            $data['peminjaman'] = $this->M_dat_peminjaman->get_data_all();
            // $data['button_kembali'] = "";
            // $data['anggota'] = $this->M_anggota->get_data_all();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('page/pengembalian/index', $data);
            $this->load->view('templates_admin/footer');
        }
    }
}