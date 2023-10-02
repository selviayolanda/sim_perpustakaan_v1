<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_detail_pinjam');
    }
    /**
     * function index
     */
    public function index(){
        $data['laporan'] = $this->M_detail_pinjam->get_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/laporan/index', $data);
		$this->load->view('templates_admin/footer');
    }
}