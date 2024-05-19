<?php

class InsertModel extends CI_Model
{
	public function insertSmartphone($data)
	{
		return $this->db->insert('smartphones', $data);
	}

	public function insertLaptop($data)
	{
		return $this->db->insert('laptop', $data);
	}

	public function insertTablet($data)
	{
		return $this->db->insert('tablet', $data);
	}

	public function insertTV($data)
	{
		return $this->db->insert('TV', $data);
	}

	public function insertEarphone($data)
	{
		return $this->db->insert('airphone', $data);
	}
}

