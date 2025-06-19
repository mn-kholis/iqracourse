<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materinilaiislami extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index($slug, $halaman = 1) {
        $data = [];
        $materi_data = $this->get_materi_data($slug, $halaman);

        if (!$materi_data) {
            redirect('nilaiislami');
            return;
        }

        $data = $materi_data;
        $this->load->view('materinilaiislami_view', $data);
    }

    private function get_materi_data($slug, $halaman) {
        $semua_materi = [
            'berdoa' => [
                'title' => 'Nilai Islami Adab & Akhlak',
                'pages' => [
                    1 => [
                        'layout_type' => 'checklist',
                        'checklist_items' => [
                            ['title' => 'Adab Mengangkat Tangan Saat Berdoa', 'description' => 'Ketika seseorang mengangkat tangannya saat berdoa, itu merupakan tanda kerendahan hati dan ketulusan dalam memohon kepada Allah SWT, menunjukkan bahwa ia sepenuhnya menggantungkan harapannya hanya kepada-Nya dan berserah diri atas segala ketetapan-Nya.'],
                            ['title' => 'Akhlak : Tawadhu\' (Rendah Hati)', 'description' => 'Tawadhu\' adalah sikap merendahkan diri yang tumbuh dari kesadaran bahwa segala kelebihan yang dimiliki hanyalah titipan Allah, sehingga seseorang tidak merasa lebih baik dari orang lain dan selalu berusaha bersikap santun serta menghargai sesama dalam setiap keadan']
                        ],
                        'page_number' => '1',
                        'next_page_url' => site_url('quiznilaiislami/show/berdoa'),
                        'prev_page_url' => site_url('nilaiislami/adab')
                    ]
                ]
            ],
            'salam' => [
                'title' => 'Nilai Islami Adab & Akhlak',
                'pages' => [
                    1 => [
                        'layout_type' => 'checklist',
                        'checklist_items' => [
                            ['title' => 'Adab Mengucapkan Salam', 'description' => 'Mengucapkan "Assalamu\'alaikum" saat bertemu adalah adab yang baik. Salam adalah doa agar orang lain diberi keselamatan. Memberi salam juga membuat hati jadi dekat dan saling menyayangi.'],
                            ['title' => 'Akhlak : Ramah dan Suka Menyapa', 'description' => 'Anak yang ramah suka menyapa, tersenyum, dan berkata sopan. Ia tidak sombong dan senang berteman dengan siapa saja, seperti Nabi Muhammad SAW yang selalu bersikap lembut kepada semua orang.']
                        ],
                        'page_number' => '1',
                        'next_page_url' => site_url('quiznilaiislami/show/salam'),
                        'prev_page_url' => site_url('nilaiislami/adab')
                    ]
                ]
            ]
        ];

        if (isset($semua_materi[$slug]['pages'][$halaman])) {
            $data = $semua_materi[$slug]['pages'][$halaman];
            $data['title'] = $semua_materi[$slug]['title'];
            return $data;
        }

        return null;
    }
}