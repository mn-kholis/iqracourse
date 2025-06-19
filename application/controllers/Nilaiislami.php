<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiIslami extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url']);
    }

    public function index() {
        $this->load->view('nilai_islami'); // tampilan awal
    }

    public function list() {
        $this->load->view('list_nilai_islami'); // daftar adab
    }

    public function materi($slug = null) {
        if (!$slug) redirect('nilaiislami/list');

        $data['halaman'] = $slug;
        $this->load->view('materi_nilai_islami', $data);
    }
}
