<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_petugas');
        $this->load->model('M_role_user');
    }
    /**
     * function index
     */
    public function index(){
        $data['petugas'] = $this->M_petugas->get_data_all();
        $data['role'] = $this->M_role_user->get_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/petugas/index', $data);
		$this->load->view('templates_admin/footer');
    }
    /**
     * function create
     */
    public function simpan_petugas(){
        $data = $this->input->post();
        $dataArray = array(
            'petugas_nm' => @$data['petugas_nm'],
            'username' => @$data['username'],
            'password' => @$data['password'],
            'role_id' => @$data['role_id'],
            'telp_no' => @$data['telp_no'],
            'alamat' => @$data['alamat'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_petugas->save_petugas($dataArray);
        redirect('petugas');
    }
    /**
     * function delete
     */
    public function hapus_petugas($id){
        $this->M_petugas->delete_petugas($id);
        redirect('petugas');
    }
}