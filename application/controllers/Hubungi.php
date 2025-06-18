<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

    public function index()
    {
        // Controller ini hanya bertugas untuk menampilkan halaman view 'hubungi_view'
        $this->load->view('hubungi_view');
    }
}