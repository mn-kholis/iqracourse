<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiziqra extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Pastikan URL helper sudah di-load (jika belum di-autoload)
        $this->load->helper('url');
    }

    public function show($lesson_id)
    {
        $data = [];

        // Siapkan data kuis berdasarkan ID pelajaran
        switch ($lesson_id) {
            case 1:
                $data['title'] = "Quis Iqro'";
                $data['question_char'] = 'ب';
                $data['question_text'] = 'Nama Huruf ini adalah...';
                $data['options'] = [
                    'A' => 'Alif',
                    'B' => 'Ta',
                    'C' => 'Ba',
                    'D' => 'Jim'
                ];
                $data['correct_answer'] = 'C';
                // Jika benar, akan lanjut ke halaman Iqra' 2
                $data['next_lesson_url'] = site_url('Halamaniqra/index/2');
                break;
            
            // Anda bisa menambahkan case 2, case 3, dst. untuk kuis pelajaran lain
            default:
                // Jika kuis tidak ada, kembalikan ke halaman iqra' pertama
                redirect('Halamaniqra');
                break;
        }

        $this->load->view('quiziqra_view', $data);
    }
}