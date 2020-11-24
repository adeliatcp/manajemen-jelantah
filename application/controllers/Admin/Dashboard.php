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

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session admin ini bisa akses halaman ini
        // misal jika dia bukan type admin, maka redirect ke halaman "Ups kamu tyda bole akses"

        $this->load->library('session');
        $this->load->model('m_payment');

        /**
         * ini di buat pas login, generate session
         * 
         * $data_user = array(
         *      'name' => 'blabla',
         *      'email' => 'blabla',
         *      'type' => 1,
         *      etc ..
         * 
         * $this->session->set_userdata('data_user',$data_user);
         */


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
        $data["user"] = $this->m_payment->getbyIduser();
        $data["pengepul"] = $this->m_payment->getbyIdpengepul();
        $this->load->view('admin/dashboard', $data);
    }



    // anything else just declare new function

}
