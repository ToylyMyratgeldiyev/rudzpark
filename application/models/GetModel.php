<?php

class GetModel extends CI_Model
{
	public function getSmartphone()
	{
		$query = $this->db->get('smartphones');
		return $query->result();
	}

	public function getTablet()
	{
		$query = $this->db->get('tablet');
		return $query->result();
	}

	public function getLaptop()
	{
		$query = $this->db->get('laptop');
		return $query->result();
	}

	public function getTv()
	{
		$query = $this->db->get('tv');
		return $query->result();
	}

	public function getEarphone()
	{
		$query = $this->db->get('airphone');
		return $query->result();
	}
}
