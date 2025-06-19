<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function index() {
        $data['faqs'] = [
            [
                'question' => 'Apakah semua materi bisa dibuka secara offline?',
                'answer'   => 'Bisa!'
            ],
            [
                'question' => 'Apakah akun Iqra\' Course bisa digunakan di lebih dari satu perangkat secara bersamaan?',
                'answer'   => 'Ya, akun dapat digunakan di beberapa perangkat.'
            ],
            [
                'question' => 'Bagaimana cara mengaktifkan atau menonaktifkan notifikasi dari aplikasi?',
                'answer'   => 'Masuk ke pengaturan aplikasi untuk mengelola notifikasi.'
            ],
            [
                'question' => 'Apakah data progres belajar anak akan hilang jika aplikasi dihapus?',
                'answer'   => 'Selama data telah tersinkronisasi, data tidak akan hilang.'
            ],
            [
                'question' => 'Apakah aplikasi ini aman digunakan oleh anak-anak tanpa pengawasan?',
                'answer'   => 'Aplikasi ini dirancang dengan fitur keamanan anak.'
            ],
            [
                'question' => 'Bagaimana cara login Iqra Course?',
                'answer'   => 'Masukkan email dan kata sandi yang telah didaftarkan.'
            ],
            [
                'question' => 'Bagaimana cara membuat akun Iqra Course?',
                'answer'   => 'Klik “Daftar” dan ikuti langkah-langkah pendaftaran.'
            ],
        ];
        $this->load->view('faq_view', $data);
    }
}