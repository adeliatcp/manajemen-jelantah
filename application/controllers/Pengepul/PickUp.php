<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PickUp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

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

        $this->load->view('pengepul/PickUp');
    }

    // anything else just declare new function

}
