<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_buku');
        $this->load->model('M_kategori');
    }

    /**
     * function index
     * function yang pertama kali tampil atau di jalankan
     */
	public function index()
	{   
		$data['buku'] = $this->M_buku->get_data_all();
		$data['kategori'] = $this->M_kategori->get_data_all();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/buku/index', $data);
		$this->load->view('templates_admin/footer');
	}
    /**
     * function create
     */
    public function simpan_buku(){
        $data = $this->input->post();
        $dataArray = array(
            'buku_nm' => @$data['buku_nm'],
            'kategori_id' => @$data['kategori_id'],
            'penulis' => @$data['penulis'],
            'penerbit' => @$data['penerbit'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_buku->save_buku($dataArray);
        redirect('buku');
    }
    /**
     * function edit
     */
    public function edit_kategori($id){
        $data = $this->input->post();
        $dataArray = array(
            'kategori_id' => @$data['kategori_id'],
            'kategori_nm' => @$data['kategori_nm'],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_kategori->change_kategori($id, $dataArray);
        // 
    }
    /**
     * delete
     */
    public function hapus_buku($id){
        $this->M_buku->delete_buku($id);
        redirect('buku');
    }
    
}
