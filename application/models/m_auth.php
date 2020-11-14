<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_auth extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    function auth($username)
    {
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function getdatabyId($id_user)
    {

        $condition = array(
            'id' => $id_user
        );
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }
}
