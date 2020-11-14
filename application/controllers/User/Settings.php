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

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_auth');
        $this->load->model('m_settings');

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
        $data["getdatabyId"] = $this->m_auth->getdatabyId($this->session->id);
        $this->load->view('user/settings', $data);
    }

    public function update_validation()
    {

        $id_user = $this->input->post('id');
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $address = $this->input->post('address');

        $data = array(
            'id' => $id_user,
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'telp' => $telp,
            'address' => $address

        );
        $where = array(
            'id' => $id_user
        );

        $this->m_settings->update($where, $data, 'user');
        redirect('user/settings');
    }


    // anything else just declare new function

}
