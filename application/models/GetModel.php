<?php

class GetModel extends CI_Model
{
	public function getSmartphone()
	{
		$query = $this->db->get('smartphones');
		return $query->result();
	}
}
