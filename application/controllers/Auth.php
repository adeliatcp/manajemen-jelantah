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

    public function login_validation()
    {
        $data = $this->input->post();

        var_dump($data); // ini utk debugging

        $name = $data['id'];
        $password = $data['password'];

        /**
         * sumber bacaan: https://codeigniter.com/userguide3/general/models.html
         * $this->load->model('model_name');
         * $data['query'] = $this->model_name->method();
         * 
         * $data['query'] nantinya akan berisi informasi orang yg login melalui select sql
         * 
         * nanti dapat deh type usernya, masukin ke session
         * 
         * if($data['query'] nanti kosong maka return login salah name/password)
         * 
         * 
         * saran : m_login diganti dengan m_auth?
         * 
         * karena nanti method methodnya ada login, ada register, dll.
         */

        die();

        // blok ini ke bawah gak akan dieksekusi karena die, hapus die kalau sudah dibuat logika login nya
        $data_user = array(
            'name' => $name,
            'email' => $password,
            'type' => 1,
        ); 
        
        $this->session->set_userdata('data_user',$data_user);
        
    }

    public function register_validation()
    {

    }

    public function forgotpass_validation()
    {

    }

}
