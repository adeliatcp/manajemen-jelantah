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


    public function update_saldo($id_user, $bill)
    {
        $condition = array(
            'id' => $id_user,
            'saldo >=' => $bill
        );

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $query = $this->db->get();
        $row = $query->result();
        $bool_update = $row ? true : false;
        if ($bool_update == true) {
            $data = array(
                'saldo' => $row->saldo + $bill
            );
            $this->db->update('user', $data);
        }
        return $bool_update;
    }


    public function getById($id_payment)
    {
        $condition = array(
            'id' => $id_payment
        );
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->where($condition);
        return $this->db->get();
    }


    function saldouser($id_payment)
    {
        $this->db->select('saldo, payment.id');
        $this->db->from('user');
        $this->db->join('payment', 'payment.id_user = user.id');
        $this->db->where('payment.id', $id_payment);
        $res = $this->db->get();
        print_r($res->result());
        //die();
    }
    //$condition = array(floatval('user.saldo')  + floatval('payment.bill'));
    //$this->db->select('saldo');
    //$this->db->from('user');
    //$this->db->where($condition);
    //$this->db->join('payment', 'payment.id_pengepul = user.id');
    //$query = $this->db->get();
    //var_dump($query->result());
    //die();
    //return;


    function saldopengepul()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id');
        $res = $this->db->get();
        print_r($res->result());
    }

    function bill($id_payment)
    {
        $condition = array(
            'id' => $id_payment
        );
        $this->db->select('bill');
        $this->db->from('payment');
        $this->db->where($condition);
        $query = $this->db->get();
        return ($query->result());
        //die();
    }

    //function hitung($id_payment)
    //{
    //  $saldo = $this->m_payment->saldouser($id_payment);
    // $bill = $this->m_payment->bill($id_payment);

    //        $condition = $saldo + $bill;
    //      $this->db->from('payment');
    //    $this->db->join('user', 'user.id = payment.id_user');
    //  $this->db->where('payment.id', $id_payment);
    //  $this->db->where($condition);
    //  $result = $this->db->set('saldo');
    //print_r(array_sum($condition));
    //$this->db->update('user', $data);
    // var_dump($condition);
    //   die();

    // $this->db->trans_start();
    // $this->db->set('saldo', 'total_set - 1');
    // $this->db->set('price', 'price - 300.00');
    // $this->db->where('user_id');
    // $this->db->update('saldo');
    // $this->db->trans_complete();


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

    public function update($id_ordering)
    {
        $condition = array(
            'id' => $id_ordering,
        );
        $data = array(
            'status' => 0
        );
        $this->db->where($condition);
        $this->db->update('ordering', $data);
    }
}
