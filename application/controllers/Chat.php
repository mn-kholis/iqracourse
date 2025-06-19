<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function cs()
    {
        $data['title'] = 'Customer Service';
        // Data histori chat bisa diambil dari database nantinya
        $data['messages'] = [
            ['sender' => 'me', 'text' => 'halo, selamat siang'],
            ['sender' => 'them', 'text' => 'halo, ada yang bisa dibantu?']
        ];

        $this->load->view('chat_view', $data);
    }

    // Method untuk menampilkan chat dengan Ustad
    public function ustad()
    {
        $data['title'] = 'Ustad';
        // Contoh data chat yang berbeda
        $data['messages'] = [
            ['sender' => 'me', 'text' => 'Assalamualaikum, Ustad. Saya mau bertanya.'],
            ['sender' => 'them', 'text' => 'Waalaikumsalam warahmatullahi wabarakatuh']
        ];

        $this->load->view('chat_view', $data);
    }
}