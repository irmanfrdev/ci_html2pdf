<?php

class Pengguna_model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('pengguna')->result();
    }
}
