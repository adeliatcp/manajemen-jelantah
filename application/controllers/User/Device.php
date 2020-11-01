<?php

defined('BASEPATH') or exit('No direct script access allowed');

// class dashboard ini misalnya untuk melihat lebih sederhana tentang transaksi, delivery atau apapun itu, yg kulit kulitnya aja

/**
 * maksudnya seperti ini:
 * 
 * misal di dashboard sudah ada tampilan tentang perangkat yang dimiliki,
 * tapi ketika di klik lebih detail perangkat itu (misalnya untuk mengedit informasi alamat perangkat atau nama perangkat itu), maka harus diarahkan ke kelas yang benar benar fokus membahas tentang perangkat
 * bukan di dashboard
 * 
 */

class Device extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session user ini bisa akses halaman ini
        // misal jika dia bukan type user, maka redirect ke halaman "Ups kamu tyda bole akses"
    }

    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {
    }

    // anything else just declare new function

}
