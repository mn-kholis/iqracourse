<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamaniqra extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // Pastikan Anda sudah meload library session jika belum di autoload
        // $this->load->library('session');
    }

    public function index($page_number = 1)
    {
        $data = [];
        
        // Logika untuk halaman sebelumnya
        $data['prev_page_url'] = ($page_number > 1) ? site_url('Halamaniqra/index/' . ($page_number - 1)) : null;

        switch ($page_number) {
            case 1:
                $data['title'] = "Iqra' 1";
                $data['instruction'] = "Baca langsung A - Ba. Bacalah dengan suara pendek";
                $data['page_arabic'] = "١";
                $data['next_page_url'] = site_url('Quiziqra/show/1'); // Mengarah ke kuis
                $data['grid_content'] = [
                    ['type' => 'full', 'content' => ['أَبَ']],
                    ['type' => 'half', 'content' => ['بَ أَبَ', 'أَبَ أَبَ']],
                    ['type' => 'half', 'content' => ['بَ أَا', 'أَ أَبَ']],
                    ['type' => 'half', 'content' => ['بَ بَ أ', 'أَبَ بَ']],
                    ['type' => 'half', 'content' => ['بَ أَبَ', 'أَبَ أَبَ']],
                    ['type' => 'half', 'content' => ['ااا', 'بَ بَ بَ']],
                    ['type' => 'third', 'content' => ['أَبَ', 'أَبَ', 'أَبَ']]
                ];
                break;

            case 2:
                $data['title'] = "Iqra' 1";
                $data['instruction'] = "Baca langsung Ba - Ta. Bacalah dengan suara pendek";
                $data['page_arabic'] = "٢";
                $data['next_page_url'] = site_url('Quiziqra/show/2'); // Mengarah ke kuis pelajaran 2
                $data['grid_content'] = [
                    ['type' => 'full', 'content' => ['بَ تَ']],
                    ['type' => 'half', 'content' => ['أَ تَ بَ', 'تَ بَ أَ']],
                    ['type' => 'half', 'content' => ['تَ أَ تَ', 'أَ بَ تَ']],
                    ['type' => 'half', 'content' => ['بَ تَ أَ', 'أَ تَ بَ']],
                    ['type' => 'half', 'content' => ['تَ أَ تَ', 'بَ أَ تَ']],
                    ['type' => 'half', 'content' => ['أَ تَ بَ', 'تَ تَ أَ']],
                    ['type' => 'third', 'content' => ['أَ تَ', 'بَ تَ', 'أَ تَ']]
                ];
                break;

            default:
                redirect('Halamaniqra/index/1');
                break;
        }

        $this->load->view('halamaniqra_view', $data);
    }
}