<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_tunai extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function form_insert($data)
    {
        $this->db->insert('tunai', $data);
    }
}

/* End of file ModelName.php */