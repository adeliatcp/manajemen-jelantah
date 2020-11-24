<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_order extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function orderdata($id_device, $id_user = null)
    {
        $condition = array(
            'id' => $id_device
        );
        if ($id_user != null) $condition += ['id_user' => $id_user];
        $this->db->from('device');
        $this->db->where($condition);
        return $this->db->get();
    }

    public function getbyIdrole()
    {
        $condition = array(
            'id_role' => 2
        );
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        return $this->db->get();
    }

    public function getbyIduser($id_user)
    {
        $condition = array(
            'id_pengepul' => $id_user,
            'status' => 0
        );
        $this->db->select('ordering.*, user.name, user.email, user.telp, user.address');
        $this->db->from('ordering');
        $this->db->where($condition);
        $this->db->join('user', 'user.id = ordering.id_user');
        return $this->db->get();
    }

    public function no_valid($condition, $data)
    {
        $this->db->where($condition);
        $this->db->delete($data);
    }

    public function update_order($id_order, $status_code)
    {
        $condition = array(
            'id' => $id_order
        );
        $data = array(
            'status' => $status_code
        );
        $this->db->where($condition);
        $this->db->update('ordering', $data);
    }

    public function getbyStatus()
    {
        $condition = array(
            'status' != 0
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('ordering');
        return $this->db->get();
    }

    public function getprocessorder($id_user)
    {
        $condition = array(
            'id_pengepul' => $id_user,
            'status' => 1

        );
        $this->db->from('ordering');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function getpayment($id_user)
    {
        $condition = array(
            'id_pengepul' => $id_user,
            'status' => 2

        );
        $this->db->from('ordering');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }
}

/* End of file ModelName.php */