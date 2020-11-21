<?php

defined('BASEPATH') or exit('No direct script access allowed');

// class dashboard ini misalnya untuk melihat lebih sederhana tentang transaksi, delivery atau apapun itu, yg kulit kulitnya aja

/**
 * maksudnya seperti ini:
 * 
 * misal di dashboard sudah ada tampilan tentang perangkat yang dimiliki,
 * tapi ketika di klik lebih detail perangkat itu (misalnya untuk mengedit informasi alamat perangkat atau nama perangkat itu), maka harus diarahkan ke kelas yang benar benar fokus membahas tentang perangkat
 * bukan di dashboard
 * 
 */

class Device extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_device');

        $user = $this->session->userdata('id_role');

        if ($user == NULL) {
            redirect('auth/login');
        }
        if ($user !== '1') {
            redirect('auth/login');
        }
    }

    public function index($id_device)
    {
        $this->load->view('user/device', ['id_device' => $id_device]);
    }

    public function adddevice()
    {
        $this->load->view('user/adddevice');
    }

    public function tambah()
    {
        $data = array(
            'id' =>  $this->input->post('id'),
            'id_user' => $this->session->id,
            'alamat'       =>  $this->input->post('alamat')
        );
        $this->db->insert('device', $data);
        redirect('user/dashboard');
    }

    public function deletedevice($id)
    {
        $data = array('id' => $id);
        $this->m_device->deletedata($data, 'device');
        redirect('user/dashboard');
    }

    public function editdevice($id_device)
    {
        $data['device'] = $this->m_device->editdata($id_device);
        $this->load->view('user/editdevice', $data);
    }

    public function update_validation()
    {
        $id_device = $this->input->post('id');
        $alamat = $this->input->post('alamat');

        $data = array(
            'alamat' => $alamat

        );
        $where = array(
            'id' => $id_device
        );

        $this->m_device->update($where, $data, 'device');
        redirect('user/dashboard');
    }



    // anything else just declare new function

}
