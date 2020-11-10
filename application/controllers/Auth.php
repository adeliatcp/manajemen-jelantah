<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
        $this->load->library('session');

        // disini lakukan untuk validasi apakah session user ini bisa akses halaman ini
    }

    // method - method yang diperlukan untuk fungsionalitas Auth

    // misal auth/login, auth/register, auth/forgotpassword, dan sebagainya

    public function index()
    {
    }

    public function login()
    {
        $this->load->view('login');
    }


    public function login_validation()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan id pada form login
        $password = ($this->input->post('password'));
        $user = $this->m_auth->auth($username);
        if (empty($user)) {
            redirect('auth/login');
        } else {
            if ($password == $user->password) {
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'name' => $user->name,
                    'id_role' => $user->id_role
                );
            } else {
                redirect('auth/login');
            }
            $this->session->set_userdata($session);
            if ($this->session->userdata('id_role') == '1') {
                redirect('user');
            } else if ($this->session->userdata('id_role') == '2') {
                redirect('pengepul');
            } else if ($this->session->userdata('id_role') == '3') {
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', 'akun anda tidak terdaftar');
                redirect('auth/login');
            }
        }
    }



    public function register()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('pilihsebagai', 'Pilihsebagai', 'required|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view('Register');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'telp' => $this->input->post('telp'),
                'address' => $this->input->post('address'),
                'id_role' => $this->input->post('pilihsebagai'),
                'date' => date('y-m-d')
            ];
            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }

    public function forgotpass()
    {
        $this->load->view('ForgotPass');
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('auth/login'); // Redirect ke halaman login
    }




    // anything else just declare new function

    //public function login_validation()
    // {
    //   $data = $this->input->post();

    // var_dump($data); // ini utk debugging

    // $name = $data['username'];
    // $password = $data['password'];

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

    // $this->session->set_userdata('data_user', $data_user);
    //}

    //public function register_validation()
    //{
    //}

    //public function forgotpass_validation()
    //{
    //}
}
