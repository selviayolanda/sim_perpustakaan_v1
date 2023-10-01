<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('check_login')) {
    function check_login() {
        $CI =& get_instance();
        
        if (!$CI->session->userdata('role_id')) {
            $CI->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
}