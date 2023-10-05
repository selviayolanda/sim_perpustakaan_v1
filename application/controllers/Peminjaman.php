<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman extends CI_Controller {

    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
        $this->load->model('M_dat_peminjaman');
        $this->load->model('M_anggota');
        $this->load->model('M_buku');
    }

    /**
     * no otomatis peminjaman
     */
    function kode_peminjaman(){
        $data = $this->M_dat_peminjaman->count_data_peminjaman();
        $kode = "PMJ-".date('Ymd').$data;
        return $kode;
    }

    /**
     * function index
     * function yang pertama kali tampil atau di jalankan
     */
	public function index()
	{   
		$data['peminjaman'] = $this->M_dat_peminjaman->get_data_all();
        $data['peminjaman_kode'] = $this->kode_peminjaman();
		$data['anggota'] = $this->M_anggota->get_data_all();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/peminjaman/index', $data);
		$this->load->view('templates_admin/footer');
	}
    /**
     * function create
     */
    public function simpan_peminjaman(){
        $data = $this->input->post();
        $dataArray = array(
            'peminjaman_id' => @$data['peminjaman_id'],
            'anggota_id' => @$data['anggota_id'],
            'keterangan' => @$data['keterangan'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_dat_peminjaman->save_peminjaman($dataArray);
        redirect('peminjaman');
    }
    /**
     * function view edit
     */
    public function edit_view($id){
        $data['detail_pinjam'] = $this->M_dat_peminjaman->get_byid_detailpinjam($id);
        $data['peminjaman'] = $this->M_dat_peminjaman->get_data_whereId($id);
        $data['anggota'] = $this->M_anggota->get_data_all();
        $data['buku'] = $this->M_buku->get_data_all();
        $data['peminjaman_kode'] = $this->kode_peminjaman();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
        $this->load->view('page/peminjaman/edit_peminjaman', $data);
        $this->load->view('templates_admin/footer');
    }
    /**
     * function edit
     */
    public function edit_peminjaman($id){
        $data = $this->input->post();
        $dataArray = array(
            'anggota_id' => @$data['anggota_id'],
            'keterangan' => @$data['keterangan'],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('username'),
        );
        $this->M_dat_peminjaman->change_peminjaman($id, $dataArray);

        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/peminjaman/edit_peminjaman', $data);
		$this->load->view('templates_admin/footer');

        redirect('peminjaman');
        // 
    }
    /**
     * delete
     */
    public function hapus_peminjaman($id){
        $this->M_dat_peminjaman->delete_peminjaman($id);
        redirect('peminjaman');
    }
    
}
