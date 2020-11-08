<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_device extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function getbyId()
    {
        $data = array(
            'id_user' => $this->session->id
        );
        $this->db->where($data);
        $query = $this->db->get('device', $data);
        return $query;
    }

    public function deletedata($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    function editdata()
    {
        $id = $this->input->post('id');
        $alamat = $this->input->post('alamat');
        $data["editdata"] = $id;
        $data["editdata"] = $alamat;
        $this->db->where('id', $id);
        $query = $this->db->get('device');
        return $query;
    }
}
 
 /* End of file ModelName.php */
