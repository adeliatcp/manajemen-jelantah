<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_settings extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function getdatabyId($id_user)
    {

        $condition = array(
            'id' => $id_user
        );
        $this->db->from('user');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

/* End of file m_riwayat.php */
