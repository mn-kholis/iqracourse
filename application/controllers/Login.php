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

    public function submit() {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        if ($email === 'admin@mail.com' && $password === 'admin123') {
            $this->session->set_userdata('email', $email);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah!');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
