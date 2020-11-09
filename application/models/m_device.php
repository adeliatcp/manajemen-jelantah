<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_device extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function getbyId($id_user)
    {
        $condition = array(
            'id_user' => $id_user
        );
        $this->db->from('device');
        $this->db->where($condition);
        // https://codeigniter.com/userguide3/database/results.html
        return $this->db->get();
    }

    public function deletedata($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    function editdata($id_device, $id_user = null)
    {
        $condition = [
            'id' => $id_device
        ];
        if($id_user != null) $condition += ['id_user' => $id_user];
        $this->db->from('device');
        $this->db->where($condition);
        return $this->db->get();
    }
}
 
 /* End of file ModelName.php */
