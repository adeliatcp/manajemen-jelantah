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

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_order');

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
        $data["getIddevice"] = $this->m_order->getIddevice($this->session->id);
        $data["getbyIdrole"] = $this->m_order->getbyIdrole();
        $this->load->view('user/Order', $data);
    }

    public function order_validation()
    {
        $data = array(
            'id_device' => $this->input->post('pilihdevice'),
            'alamat'   =>  $this->input->post('address'),
            'telp'      =>  $this->input->post('telp'),
            'id_pengepul' => $this->input->post('pilihpengepul'),
            'harga' => $this->input->post('price'),
            'status' => 0 //  1 = sedang proses; 2 = selesai; 3 = ditolak
        );
        $this->db->insert('ordering', $data);
        redirect('user/dashboard');
    }




    // anything else just declare new function

}
