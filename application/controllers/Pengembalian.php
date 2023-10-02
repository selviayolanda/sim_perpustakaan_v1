<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pengembalian extends CI_Controller{
    /**
     * function construct
     */
    public function __construct(){
        parent::__construct();
        $this->load->helper('login_session_helper');
        check_login();
    }
    /**
     * function index
     */
    public function index(){
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('page/pengembalian/index');
		$this->load->view('templates_admin/footer');
    }
}