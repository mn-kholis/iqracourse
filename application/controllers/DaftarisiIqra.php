<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// NAMA CLASS DIUBAH
class DaftarisiIqra extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index($book_number = 1)
    {
        $data = [];

        switch ($book_number) {
            case 1:
                $data['title'] = "Iqra' 1";
                $data['page_list'] = [
                    ['page' => 1, 'title' => 'أ ب'],
                    ['page' => 2, 'title' => 'ب ت'],
                    ['page' => 3, 'title' => 'ت ث'],
                    ['page' => 4, 'title' => 'ث ج'],
                    ['page' => 5, 'title' => 'ج ح'],
                    ['page' => 6, 'title' => 'ح خ'],
                    ['page' => 7, 'title' => 'خ د'],
                    ['page' => 8, 'title' => 'د ذ'],
                    ['page' => 9, 'title' => 'ذ ر'],
                    ['page' => 10, 'title' => 'ر ز'],
                    ['page' => 11, 'title' => 'ز س'],
                    ['page' => 12, 'title' => 'س ش'],
                    ['page' => 13, 'title' => 'ش ص'],
                    ['page' => 14, 'title' => 'ص ض'],
                    ['page' => 15, 'title' => 'ض ط'],
                    ['page' => 16, 'title' => 'ط ظ'],
                ];
                break;
            
            default:
                redirect('/');
                break;
        }

        // NAMA VIEW YANG DIMUAT JUGA DIUBAH
        $this->load->view('daftarisiiqra_view', $data);
    }
}