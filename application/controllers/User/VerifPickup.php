<?php

defined('BASEPATH') or exit('No direct script access allowed');

// class dashboard ini misalnya untuk melihat lebih sederhana tentang transaksi, delivery atau apapun itu, yg kulit kulitnya aja


class VerifPickup extends CI_Controller
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
        $data["getbyStatus"] = $this->m_order->getbyStatus();
        $this->load->view('user/verifpickup', $data);
    }

    public function order_valid()
    {
        $data = array(
            'status' => 2
        );
        $this->db->update('ordering', $data);
        redirect('user/dashboard');
    }

    // anything else just declare new function

}
