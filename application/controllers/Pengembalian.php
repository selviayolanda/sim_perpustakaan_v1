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
		$data['pengembalian'] = $this->M_dat_peminjaman->get_data_all();
		// $data['anggota'] = $this->M_anggota->get_data_all();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/pengembalian/index', $data);
		$this->load->view('templates_admin/footer');
	}
}