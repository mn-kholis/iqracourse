<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

    public function index() {
        // Cek apakah form disubmit
        if ($this->input->method() == 'post') {
            $name     = $this->input->post('name');
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm  = $this->input->post('repeat_password');

            // Validasi sederhana
            if ($password !== $confirm) {
                $this->session->set_flashdata('error', 'Konfirmasi password tidak cocok.');
                redirect('register');
                return;
            }

            // Simpan ke database atau session (sementara contoh)
            $this->session->set_userdata([
                'email' => $email,
                'name'  => $name,
                'logged_in' => true
            ]);

            // Redirect ke halaman login
            redirect('login');
        }

        // Tampilkan form jika belum disubmit
        $this->load->view('register');
    }
}
