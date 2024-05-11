<?php

class InsertModel extends CI_Model
{
    public function insertSmartphone($data)
    {
        return $this->db->insert('smartphones',$data);
    }
}

