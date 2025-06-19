<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiznilaiislami extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function show($slug) {
        $data = [];

        switch ($slug) {
            case 'berdoa':
                $data['page_title'] = 'Quis Nilai Islami';
                $data['quiz_title'] = 'Uji Pengetahuanmu tentang Islam!';
                $data['question'] = 'Mengapa penting bersikap tawadhu\' dalam kehidupan sehari-hari?';
                $data['options'] = [
                    'A' => 'Merendahkan orang lain',
                    'B' => 'Merasa diri paling benar',
                    'C' => 'Rendah hati dan menghargai orang lain',
                    'D' => 'Tidak peduli terhadap keadaan',
                ];
                $data['correct_answer_key'] = 'C';
                $data['explanation'] = 'Tawadhu\' adalah sikap rendah hati, tidak merasa lebih baik dari orang lain, dan menghormati sesama.';
                $data['continue_url'] = site_url('nilaiislami/adab');
                break;

            case 'salam':
                $data['page_title'] = 'Quis Nilai Islami';
                $data['quiz_title'] = 'Uji Pengetahuanmu tentang Islam!';
                $data['question'] = 'Apa arti dari ucapan "Assalamu\'alaikum"?';
                $data['options'] = [
                    'A' => 'Selamat pagi',
                    'B' => 'Semoga keselamatan tercurah untukmu',
                    'C' => 'Apa kabarmu?',
                    'D' => 'Sampai jumpa lagi',
                ];
                $data['correct_answer_key'] = 'B';
                $data['explanation'] = 'Assalamu\'alaikum adalah doa yang mulia yang berarti "Semoga keselamatan tercurah untukmu".';
                $data['continue_url'] = site_url('nilaiislami/adab');
                break;
            
            default:
                redirect('nilaiislami');
                break;
        }

        $this->load->view('quiz_nilai_islami_view', $data);
    }
}