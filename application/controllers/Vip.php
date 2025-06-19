<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vip extends CI_Controller {

    public function index()
    {
        $this->load->view('vip');
    }
}