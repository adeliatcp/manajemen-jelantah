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
        $query = $this->db->where('username', $username);
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}
