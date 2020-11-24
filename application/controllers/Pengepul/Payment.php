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

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_auth');
        $this->load->model('m_payment');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login');
        }
        if ($user !== '2') {
            redirect('auth/login');
        }
    }

    public function index($id_ordering)
    {
        $data['getdatabyId'] = $this->m_auth->getdatabyId($this->session->id);
        $data['getdatapayment'] = $this->m_payment->getdatapayment($id_ordering);
        $this->load->view('pengepul/Payment', $data);
    }

    public function payment_validation()
    {
        $id_ordering = $this->input->post('idorder');
        $data = array(
            'id_ordering' => $id_ordering,
            'id_pengepul' => $this->session->id,
            'id_user' => $this->input->post('iduser'),
            'id_device'   => $this->input->post('iddevice'),
            'bill'      =>  $this->input->post('bill'),
            'date' => $this->input->post('date'),
            'status' => 1 //  1 = sedang proses; 2 = berhasil; 3 = gagal
        );
        $this->db->insert('payment', $data);
        $this->m_payment->update($id_ordering);
        redirect('pengepul/payment/payment_history');
    }

    public function payment_history()
    {
        $data['history'] = $this->m_payment->gethistory($this->session->id);
        $this->load->view('pengepul/History', $data);
    }

    // anything else just declare new function

}
