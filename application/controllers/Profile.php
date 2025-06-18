<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['user'] = [
            'username' => 'Fadhila Asla',
            'email' => 'fadhila@example.com'
        ];

        $this->load->view('profile', $data);
    }

    public function ubah_profil() {
        $data['user'] = [
            'username' => 'Fadhila Asla',
            'email' => 'fadhila@example.com'
        ];

        $this->load->view('ubah_profile', $data);
    }

    public function simpan_profil() {
        $username = $this->input->post('username', TRUE);
        $email = $this->input->post('email', TRUE);
        redirect('profile');
    }

    public function berlangganan() {
        $this->load->view('berlanggan'); 
    }
}
