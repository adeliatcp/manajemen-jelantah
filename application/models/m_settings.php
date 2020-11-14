<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_settings extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

/* End of file m_riwayat.php */
