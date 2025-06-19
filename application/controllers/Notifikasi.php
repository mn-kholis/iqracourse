<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Notifikasi';

        // Data notifikasi ini bisa Anda ambil dari database
        $data['notifications'] = [
            [
                'type' => 'info', // tipe bisa 'info' atau 'reminder'
                'title' => 'Aktifitas Login Pada Perangkat Baru!',
                'description' => 'Perangkat baru telah login di Yogyakarta, Indonesia',
                'date' => '18 Mei 2025'
            ],
            [
                'type' => 'reminder',
                'title' => 'Waktunya Mengaji!',
                'description' => 'Hari baru, semangat baru. Waktunya pergi mengaji',
                'date' => '17 Mei 2025'
            ],
            [
                'type' => 'info',
                'title' => 'Aplikasi Memerlukan Update!',
                'description' => 'Aplikasi anda merupakan versi lama, silahkan perbarui ke versi yang baru',
                'date' => '16 Mei 2025'
            ],
            [
                'type' => 'reminder',
                'title' => 'Waktunya Mengaji!',
                'description' => 'Hari baru, semangat baru. Waktunya pergi mengaji',
                'date' => '15 Mei 2025'
            ],
            [
                'type' => 'reminder',
                'title' => 'Waktunya Mengaji!',
                'description' => 'Hari baru, semangat baru. Waktunya pergi mengaji',
                'date' => '14 Mei 2025'
            ]
        ];
        
        $this->load->view('notifikasi_view', $data);
    }
}