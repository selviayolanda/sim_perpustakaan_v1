<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roleuser extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_role_user');
    }
    /**
     * function index
     */
    public function index(){
        $data['role_user'] = $this->M_role_user->get_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/roleuser/index', $data);
		$this->load->view('templates_admin/footer');
    }
    /**
     * function create
     */
    public function simpan_role(){
        $data = $this->input->post();
        $dataArray = array(
            'role_nm' => @$data['role_nm'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_role_user->save_role($dataArray);
        redirect('roleuser');
    }
    /**
     * function delete
     */
    public function hapus_role($id){
        $this->M_role_user->delete_role($id);
        redirect('roleuser');
    }

}