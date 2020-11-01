<?php

defined('BASEPATH') or exit('No direct script access allowed');

// class dashboard ini misalnya untuk melihat lebih sederhana tentang transaksi, delivery atau apapun itu, yg kulit kulitnya aja

/**
 * maksudnya seperti ini:
 * 
 * misal di dashboard sudah ada tampilan transaksi (dalam bentuk tabel misalnya),
 * tapi ketika di klik lebih detail transaksi itu, maka harus diarahkan ke kelas yang benar benar fokus membahas tentang transaksi
 * bukan di dashboard
 * 
 * tapi ini sebagai permisalan aja
 * pikirkan baik baik apakah kelas ini dibutuhkan atau hanya dashboard saja sudah cukup
 * 
 */

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session admin ini bisa akses halaman ini
        // misal jika dia bukan type admin, maka redirect ke halaman "Ups kamu tyda bole akses"
    }

    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {

        $this->load->view('admin/settings');
    }

    // anything else just declare new function

}
