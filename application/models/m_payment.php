<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_payment extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function getdatapayment($id_ordering)
    {
        $condition = array(
            'ordering.id' => $id_ordering,

        );
        $this->db->select('ordering.*, user.name, user.email, user.telp, user.address');
        $this->db->from('ordering');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = ordering.id_user');
        return $this->db->get();
    }

    public function gethistory($id_user)
    {
        $condition = array(
            'id_pengepul' => $id_user,
            'status' != 0
        );
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = payment.id_user');
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function getbyIduser()
    {
        $condition = array(
            'status' => 1
        );
        $this->db->select('payment.*, user.name, user.email, user.telp, user.address');
        $this->db->from('payment');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = payment.id_user');
        return $this->db->get();
    }

    public function getbyIdpengepul()
    {
        $condition = array(
            'status' => 1
        );
        $this->db->select('payment.*, user.name, user.email, user.telp, user.address');
        $this->db->from('payment');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = payment.id_pengepul');
        return $this->db->get();
    }

    public function update_payment($id_payment, $status_code)
    {
        $condition = array(
            'id' => $id_payment
        );
        $data = array(
            'status' => $status_code
        );
        $this->db->where($condition);
        $this->db->update('payment', $data);
    }

    public function verif()
    {
        $condition = array(
            'status' != 0
        );
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = payment.id_user');
        // $this->db->join('user', 'user.id = payment.id_user');
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function userhistory($id_user)
    {
        $condition = array(
            'id_user' => $id_user,
            'status' != 0
        );
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = payment.id_pengepul');
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function deletedata($id_order)
    {
        $condition = array(
            "id" => $id_order
        );
        $this->db->where($condition);
        $this->db->delete('ordering');
    }
}
