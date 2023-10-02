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
     * function view edit
     */
    public function edit_view($id){
        $data['buku'] = $this->M_buku->get_data_whereId($id);
        $data['kategori'] = $this->M_kategori->get_data_all();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('page/buku/edit_buku', $data);
        $this->load->view('templates_admin/footer');
    }
    /**
     * function edit
     */
    public function edit_buku($id){
        $data = $this->input->post();
        $dataArray = array(
            'buku_nm' => @$data['buku_nm'],
            'kategori_id' => @$data['kategori_id'],
            'penulis' => @$data['penulis'],
            'penerbit' => @$data['penerbit'],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_buku->change_buku($id, $dataArray);

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/buku/edit_buku', $data);
		$this->load->view('templates_admin/footer');

        redirect('buku');
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
