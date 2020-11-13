<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PickupHistory extends CI_Controller
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
        if ($user !== '2') {
            redirect('auth/login');
        }
    }

    function page_pengepul()
    {

        if ($this->session->userdata('id_role') !== '2') {
            redirect('auth/login', 'refresh');
        } else {
            redirect('pengepul/dashboard');
        }
    }

    public function index()
    {
        $data["getpayment"] = $this->m_order->getpayment($this->session->id);
        $this->load->view('pengepul/PickupHistory', $data);
    }


    // anything else just declare new function

}
