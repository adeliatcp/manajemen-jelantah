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
        $this->load->model('m_device');
        $this->load->model('m_auth');
        $this->load->model('m_payment');

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
        $data['getdevice'] = $this->m_order->orderdata($id_device);
        $data["getbyId"] = $this->m_device->getbyId($this->session->id);
        $data["getbyIdrole"] = $this->m_order->getbyIdrole();
        $data["getdatabyId"] = $this->m_auth->getdatabyId($this->session->id);
        $this->load->view('user/Order', $data);
    }

    public function create_order()
    {
        $data = array(
            'id_user' => $this->session->id,
            'id_device' => $this->input->post('device'),
            'alamat'   =>  $this->input->post('address'),
            'telp'      =>  $this->input->post('telp'),
            'id_pengepul' => $this->input->post('pilihpengepul'),
            'harga' => $this->input->post('price'),
            'status' => 0, //  1 = sedang proses; 2 = selesai; 3 = ditolak
            'date' => date('y-m-d')
        );
        $this->m_order->ordering($data, 'ordering');
        redirect('user/dashboard');
    }

    public function order_valid()
    {
        $data = array(
            //    'id' => $id_ordering,
            'status' => 2
        );
        $this->db->update('ordering', $data);
        redirect('user/dashboard');
    }

    public function order_invalid($id_ordering)
    {
        $data = array(
            'id' => $id_ordering,
        );
        $this->m_order->delete_order($data, 'ordering');
        // $this->m_order->orderdata($id_device);
        redirect('user/dashboard');

        /**
         * select id order
         * $order = get order by id (model)
         * 
         * dapatin id device dari id order itu
         * $id_device = $order->id_device
         * 
         * terus hapus order by id order nya
         * 
         * delete order by id (model)
         * 
         * redirect('user/order/for/id_device')
         */
    }

    public function verif_pickup()
    {
        $data["name"] = $this->m_auth->getdatabyId($this->session->id);
        $data["getbyStatus"] = $this->m_order->getbyStatus($this->session->id);
        $this->load->view('user/Notification', $data);
    }

    public function history()
    {
        $data["name"] = $this->m_auth->getdatabyId($this->session->id);
        $data["history"] = $this->m_payment->userhistory($this->session->id);
        $this->load->view('user/History', $data);
    }

    // anything else just declare new function

}
