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

class VerifPickup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login');
        }
        if ($user !== '1') {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->load->view('user/VerifPickup');
    }

    // anything else just declare new function

}
