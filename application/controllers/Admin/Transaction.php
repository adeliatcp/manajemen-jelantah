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

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_payment');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login');
        }
        if ($user !== '3') {
            redirect('auth/login');
        }
    }


    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {

        $this->load->view('admin/Transaction');
    }

    public function history()
    {
        $data['history'] = $this->m_payment->verif();
        $this->load->view('admin/History', $data);
    }

    // anything else just declare new function

}
