<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PickupHistory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session pengepul ini bisa akses halaman ini
        // misal jika dia bukan type pengepul, maka redirect ke halaman "Ups kamu tyda bole akses"
    }

    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {

        $this->load->view('pengepul/PickupHistory');
    }


    // anything else just declare new function

}
