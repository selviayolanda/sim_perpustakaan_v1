<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_kategori');
        $this->load->model('M_kategori');
    }

    /**
     * function index
     * function yang pertama kali tampil atau di jalankan
     */
	public function index()
	{
		$data['kategori'] = $this->M_kategori->get_data_all();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/kategori/index', $data);
		$this->load->view('templates_admin/footer');
	}
    /**
     * function create
     */
    public function simpan_kategori(){
        $data = $this->input->post();
        $dataArray = array(
            'kategori_nm' => @$data['kategori_nm'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_kategori->save_kategory($dataArray);
        redirect('kategori');
    }
    /**
     * function edit
     */
    public function edit_view($id){
        $data['kategori'] = $this->M_kategori->get_data_whereId($id);
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('page/kategori/edit_kategori', $data);
        $this->load->view('templates_admin/footer');
    }
    /**
     * function edit
     */
    public function edit_kategori($id){
        $data = $this->input->post();
        $dataArray = array(
            'kategori_nm' => @$data['kategori_nm'],
            'kategori_id' => @$data['kategori_id'],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_kategori->change_kategori($id, $dataArray);

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/kategori/edit_kategori', $data);
		$this->load->view('templates_admin/footer');

        redirect('kategori');
        // 
    }
    /**
     * delete
     */
    public function hapus_kategori($id){
        $this->M_kategori->delete_kategori($id);
        redirect('kategori');
    }
}
