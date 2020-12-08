<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PickUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_auth');
        $this->load->model('m_order');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login');
        }
        if ($user !== '2') {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data["name"] = $this->m_auth->getdatabyId($this->session->id);
        $data["processorder"] = $this->m_order->getprocessorder($this->session->id);
        $this->load->view('pengepul/PickUp', $data);
    }


    public function pickup_success()
    {
        $data["name"] = $this->m_auth->getdatabyId($this->session->id);
        $data["datapayment"] = $this->m_order->getpayment($this->session->id);
        $this->load->view('pengepul/PickupSuccess', $data);
    }







    // anything else just declare new function

}
