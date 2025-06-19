<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materinilaiislami extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url']);
    }

    // Parameter halaman default = 1
    public function index($halaman = 1) {
        $data['halaman'] = $halaman;
        $this->load->view('materi_nilai_islami', $data);
    }
}
