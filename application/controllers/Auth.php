<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // disini lakukan untuk validasi apakah session user ini bisa akses halaman ini
    }

    // method - method yang diperlukan untuk fungsionalitas Auth

    // misal auth/login, auth/register, auth/forgotpassword, dan sebagainya

    public function index()
    {
    }

    public function login()
    {
        $this->load->view('Login');
    }

    public function register()
    {
        $this->load->view('Register');
    }

    public function forgotpass()
    {
        $this->load->view('ForgotPass');
    }

    // anything else just declare new function

}
