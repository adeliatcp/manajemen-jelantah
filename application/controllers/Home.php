<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session user ini bisa akses halaman ini
    }

    // method - method yang diperlukan untuk fungsionalitas Home

    public function index()
    {
        $data = [
            'isi' => 'Home',
        ];
        $this->load->view('Home', $data, FALSE);
    }
}
