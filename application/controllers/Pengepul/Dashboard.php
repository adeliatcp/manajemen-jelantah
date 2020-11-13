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
        $this->load->library('session');
        $this->load->model('m_order');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login', 'refresh');
        }
        if ($user !== '2') {
            redirect('auth/login', 'refresh');
        }
    }

    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {
        $data["getbyIduser"] = $this->m_order->getbyIduser($this->session->id);
        $this->load->view('pengepul/dashboard', $data);
    }

    public function yes_validation()
    {
        $data = array(
            'status' => 1
        );
        $this->db->update('ordering', $data);
        redirect('pengepul/dashboard');
    }

    public function no_validation()
    {
        $data = array(
            'status' => 3
        );
        $this->db->update('ordering', $data);
        redirect('pengepul/dashboard');
    }


    // anything else just declare new function

}
