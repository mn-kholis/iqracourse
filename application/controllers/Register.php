<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function process()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $repeat_password = $this->input->post('repeat_password');
        
        if (empty($email) || empty($password) || empty($repeat_password)) {
            $this->session->set_flashdata('error', 'Semua kolom wajib diisi!');
            redirect('register');
            return;
        }

        if ($password !== $repeat_password) {
            $this->session->set_flashdata('error', 'Kata sandi tidak cocok!');
            redirect('register');
            return;
        }

        $this->session->set_flashdata('register_success', 'Pendaftaran Berhasil!');
        redirect('register');
    }
}