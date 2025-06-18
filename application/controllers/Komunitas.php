<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komunitas extends CI_Controller {

    public function index()
    {
        // Data ini bisa Anda ambil dari database nantinya
        $data['posts'] = [
            [
                'username' => 'User2009375',
                'time' => '5 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '965'
            ],
            [
                'username' => 'User2009375',
                'time' => '8 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '843'
            ],
            [
                'username' => 'User2009375',
                'time' => '5 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '963'
            ],
             [
                'username' => 'User2009375',
                'time' => '5 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '965'
            ],
            [
                'username' => 'User2009375',
                'time' => '9 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.079',
                'shares' => '843'
            ],
             [
                'username' => 'User2009375',
                'time' => '5 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '963'
            ],
            [
                'username' => 'User2009375',
                'time' => '5 menit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.',
                'likes' => '1.290',
                'comments' => '3.078',
                'shares' => '965'
            ],
        ];

        // Memuat view dan mengirimkan data
        $this->load->view('komunitas_view', $data);
    }
}