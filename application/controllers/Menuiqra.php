<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuiqra extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $data['iqra_list'] = [
            [
                'judul' => 'IQRA\' 1',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra1.png')
            ],
            [
                'judul' => 'IQRA\' 2',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra2.png')
            ],
            [
                'judul' => 'IQRA\' 3',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra3.png')
            ],
            [
                'judul' => 'IQRA\' 4',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra4.png')
            ],
             [
                'judul' => 'IQRA\' 5',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra1.png')
            ],
             [
                'judul' => 'IQRA\' 6',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
                'gambar' => base_url('assets/gambariqra3.png')
            ]
        ];

        $this->load->view('menuiqra', $data);
    }
}
