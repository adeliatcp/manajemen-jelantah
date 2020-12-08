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
        $this->load->model('m_device');


        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login', 'refresh');
        }
        if ($user !== '1') {
            redirect('auth/login', 'refresh');
        }
        // disini lakukan untuk validasi apakah session user ini bisa akses halaman ini
        // misal jika dia bukan type user, maka redirect ke halaman "Ups kamu tyda bole akses"
    }

    // method - method yang diperlukan untuk fungsionalitas Dashboard

    public function index()
    {
        $data["saldo"] = $this->m_auth->getdatabyId($this->session->id);
        $data["getbyStatus"] = $this->m_order->getbyStatus($this->session->id);
        $data["getbyId"] = $this->m_device->getbyId($this->session->id);
        $this->load->view('user/dashboard', $data);
    }

    public function adddevice()
    {
        $data["name"] = $this->m_auth->getdatabyId($this->session->id);
        $this->load->view('user/AddDevice', $data);
    }

    public function add_device()
    {
        $data = array(
            'id' =>  $this->input->post('id'),
            'id_user' => $this->session->id,
            'alamat'       =>  $this->input->post('alamat')
        );
        $this->m_device->add($data, 'device');
        redirect('user/dashboard');
    }



    // anything else just declare new function

}
