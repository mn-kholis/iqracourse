<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiIslami extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Nilai Islami';
        
        $data['menu_items'] = [
            [
                'title' => 'Adab & Akhlak',
                'image' => 'adab.png',
                'url' => 'nilaiislami/adab'
            ],
            [
                'title' => 'Tata Cara Wudhu',
                'image' => 'wudhu.png',
                'url' => 'nilaiislami/wudhu'
            ],
            [
                'title' => 'Rukun Iman',
                'image' => 'iman.png',
                'url' => 'nilaiislami/iman'
            ]
        ];

        $this->load->view('nilai_islami_view', $data);
    }

    public function adab() {
        $data['title'] = 'Adab dan Akhlak';

        $data['adab_list'] = [
            ['title' => 'Adab Mengangkat Tangan Saat Berdoa', 'slug' => 'berdoa'],
            ['title' => 'Adab Mengucapkan Salam', 'slug' => 'salam'],
            ['title' => 'Adab Berbicara', 'slug' => 'berbicara'],
            ['title' => 'Adab Bertamu', 'slug' => 'bertamu'],
            ['title' => 'Adab Makan dan Minum', 'slug' => 'makan-minum'],
            ['title' => 'Adab Terhadap Orang Tua', 'slug' => 'orang-tua'],
            ['title' => 'Adab Sebelum Tidur', 'slug' => 'tidur'],
            ['title' => 'Adab Masuk Rumah', 'slug' => 'masuk-rumah'],
            ['title' => 'Adab Mengucap Terima Kasih', 'slug' => 'terima-kasih'],
            ['title' => 'Adab Menjaga Lisan', 'slug' => 'lisan'],
            ['title' => 'Adab Berpakaian', 'slug' => 'pakaian'],
            ['title' => 'Adab Bergaul dengan Teman', 'slug' => 'bergaul'],
            ['title' => 'Adab Jujur dan Tidak Berbohong', 'slug' => 'jujur'],
            ['title' => 'Adab Menjaga Kebersihan Diri dan Lingkungan', 'slug' => 'kebersihan'],
            ['title' => 'Adab Menghormati Guru dan Orang yang Lebih Tua', 'slug' => 'menghormati'],
            ['title' => 'Adab Tidak Suka Berbohong', 'slug' => 'tidak-berbohong']
        ];

        $this->load->view('adab_submenu_view', $data);
    }
}