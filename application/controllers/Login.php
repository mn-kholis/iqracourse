<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat helper URL agar site_url() bisa digunakan di view
        $this->load->helper('url');
        // Optional: flashdata butuh session
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function process() {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        if (!empty($email) && !empty($password)) {
            $this->session->set_userdata('user_logged_in', TRUE);
            
            $this->session->set_flashdata('login_success', 'Anda telah berhasil masuk.');

            redirect('Login');
        } else {
            $this->session->set_flashdata('login_error', 'Mohon isi semua kolom!');
            redirect('Login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
