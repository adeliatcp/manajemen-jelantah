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
        $this->load->model('m_auth');
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
        $data["saldo"] = $this->m_auth->getdatabyId($this->session->id);
        $data["getbyIduser"] = $this->m_order->getbyIduser($this->session->id);
        $this->load->view('pengepul/dashboard', $data);
    }

    /**
     * bisa pakai ? (query url)
     * url = google.com/order/1?confirm=true
     */

    public function order_validation($id_order)
    {
        $bool_order = $this->input->get('confirm', TRUE);
        // true || false
        $status_code = filter_var($bool_order, FILTER_VALIDATE_BOOLEAN) ? 1 : 3;
        $this->m_order->update_order($id_order, $status_code);
        redirect('pengepul/dashboard');
    }

    // anything else just declare new function
}
