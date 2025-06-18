<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanmengaji extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $data['iqra_list'] = [
            [
                'stage' => '0/11',
                'score' => 0,
                'bintang' => 0,
                'materi' => 'Kamu belum mendapatkan materi',
                'gambar' => base_url('assets/laporaniqra1.png')
            ],
            [
                'stage' => '0/11',
                'score' => 0,
                'bintang' => 0,
                'materi' => 'Kamu belum mendapatkan materi',
                'gambar' => base_url('assets/laporaniqra2.png')
            ],
            [
                'stage' => '0/11',
                'score' => 0,
                'bintang' => 0,
                'materi' => 'Kamu belum mendapatkan materi',
                'gambar' => base_url('assets/laporaniqra3.png')
            ],
            [
                'stage' => '0/11',
                'score' => 0,
                'bintang' => 0,
                'materi' => 'Kamu belum mendapatkan materi',
                'gambar' => base_url('assets/laporaniqra4.png')
            ],
        ];

        $this->load->view('laporan_mengaji', $data);
    }
}
