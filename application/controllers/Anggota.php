<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_anggota');
    }
    /**
     * function index
     */
    public function index(){
        $data['anggota'] = $this->M_anggota->det_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/anggota/index', $data);
		$this->load->view('templates_admin/footer');
    }
    /**
     * function create
     */
    public function simpan_anggota(){
        $data = $this->input->post();
        $dataArray = array(
            'anggota_nm' => @$data['anggota_nm'],
            'jk' => @$data['jenis_kelamin'],
            'telp_no' => @$data['no_telp'],
            'alamat' => @$data['alamat'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_anggota->save_anggota($dataArray);
        redirect('anggota');
    }
    /**
     * delete anggota
     */
    public function hapus_anggota($id){
        $this->M_anggota->delete_anggota($id);
        redirect('anggota');
    }
}