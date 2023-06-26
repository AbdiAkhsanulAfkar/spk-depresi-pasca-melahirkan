<?php

class ModelLogin extends CI_Model
{
    function cek_login($data)
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
    function role($data)
    {
        $query = $this->db->get_where('role', $data);
        return $query;
    }
}
