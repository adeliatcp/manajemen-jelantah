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

    public function payment_validation($id_payment)
    {
        $bool_pay = $this->input->get('confirm', TRUE);
        // true || false
        $status_code = filter_var($bool_pay, FILTER_VALIDATE_BOOLEAN) ? 2 : 3;

        // dapatin 1 row data dari tabel payment dimana id = id_payment
        $payment = $this->m_payment->getById($id_payment)->result();
        // ambil 3 data (id_user, id_pengepul, bill)
        $id_user = $payment->id_user;
        $id_pengepul = $payment->id_pengepul;
        $bill = $payment->bill;
        // proses saldo 1 -> pengepul dicek dulu saldonya cukup atau tidak, kalau ngga cukup return, kalau cukup diproses

        $bool_saldo = $this->m_payment->update_saldo($id_pengepul, $bill);
        // proses saldo 2 -> hanya akan diproses kalau proses saldo 1 tidak return 
        redirect('admin/dashboard');
    }

    public function history()
    {
        $data['history'] = $this->m_payment->verif();
        //$data = $this->m_payment->saldouser();
        $this->load->view('admin/History', $data);
    }

    // anything else just declare new function

}
