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

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function add($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function editdata($id_device, $id_user = null)
    {
        $condition = array(
            'id' => $id_device
        );
        if ($id_user != null) $condition += ['id_user' => $id_user];
        $this->db->from('device');
        $this->db->where($condition);
        return $this->db->get();
    }
}
 
 /* End of file ModelName.php */
