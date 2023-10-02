<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_dat_peminjaman');
        $this->load->model('M_anggota');
        $this->load->model('M_buku');
    }
    /**
     * function index
     */
    public function index(){
        $data['buku'] = $this->M_buku->get_data_all();
        $data['peminjaman'] = $this->M_dat_peminjaman->get_data_all();
        $data['anggota'] = $this->M_anggota->get_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/peminjaman/index', $data);
		$this->load->view('templates_admin/footer');
    }
}