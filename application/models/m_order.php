<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_order extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
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

    public function getIddevice($id_user)
    {
        $condition = array(
            'id_user' => $id_user
        );
        $this->db->select('id');
        $this->db->from('device');
        $this->db->where($condition);
        return $this->db->get();
    }

    public function getIdpengepul($id_user)
    {
        $condition = array(
            'id' => $id_user,
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
        $this->db->from('ordering');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function no_valid($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function getbyStatus()
    {
        $this->db->select('*');
        $this->db->from('ordering');
        $this->db->where('status !=', 0);
        // https://codeigniter.com/userguide3/database/results.html
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