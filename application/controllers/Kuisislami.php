<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KuisIslami extends CI_Controller {

    public function index($slug = null) {
        if (!$slug) redirect('kuis_islami');

        $data['slug'] = $slug;
        $this->load->view('kuis_islami', $data);
    }

    public function selesai($slug) {
        $materi_urutan = [
            'berdoa', 'salam', 'berbicara', 'bertamu',
            'makan', 'orangtua', 'tidur', 'masuk_rumah',
            'terimakasih', 'lisan', 'berpakaian', 'teman',
            'jujur', 'kebersihan', 'guru', 'tidak_boong'
        ];

        $index = array_search($slug, $materi_urutan);
        if ($index !== false && isset($materi_urutan[$index + 1])) {
            $next = $materi_urutan[$index + 1];
            redirect('nilaiislami/materi/' . $next);
        } else {
            redirect('nilaiislami/list');
        }
    }
}
