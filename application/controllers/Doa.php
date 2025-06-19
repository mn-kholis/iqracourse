<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form'); // penting untuk form
    }

    public function index()
    {
        $this->load->view('doa_view');
    }

    public function qunut()
    {
        $this->load->view('doa_qunut_view');
    }

    public function quiz()
    {
        $data['jawaban_benar'] = 'B'; // Misalnya: jawaban benar adalah B (Doa Qunut)
        $this->load->view('quiz_doa_qunut_view', $data);
    }

    public function hujan()
    {
        $this->load->view('doa_hujan_view');
    }
}
