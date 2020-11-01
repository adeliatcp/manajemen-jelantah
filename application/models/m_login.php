<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_login extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function login_user($id, $password)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('a_login');
        }
    }
}

/* End of file m_riwayat.php */
