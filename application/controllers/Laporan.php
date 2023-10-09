<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    /**
     * function construct
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_dat_detail_pinjam'); // Manually load the model
    }
    
    /**
     * function index
     */
    public function index() {
        $this->load->model('M_dat_detail_pinjam'); // Load the model here as well
        $data['laporan'] = $this->M_dat_detail_pinjam->get_data_all(); // Use the correct model
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('page/laporan/index', $data);
        $this->load->view('templates_admin/footer');
    }
}
