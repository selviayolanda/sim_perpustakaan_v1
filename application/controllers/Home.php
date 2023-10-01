<?php 

class Home extends CI_Controller
{
    /**
     * ==========================
     * | construct              |
     * ==========================
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_buku');
        $this->load->model('M_anggota');
    }
    public function index(){
        $checkRole = $this->session->userdata('role_id');
        $data['buku_count'] = $this->M_buku->count_data_buku();
        $data['anggota_count'] = $this->M_anggota->count_data_anggota();
        if($checkRole == '1'){
            $this->load->view('templates_admin/sidebar');
            $this->load->view('templates_admin/header');
            $this->load->view('admin/dashboard', $data);
            $this->load->view('templates_admin/footer');
        }else{
            redirect('welcome');
        }
    }

}