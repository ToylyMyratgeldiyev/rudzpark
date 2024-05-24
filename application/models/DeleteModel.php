<?php

class DeleteModel extends CI_Model
{
	public function earphone($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('airphone');
	}

	public function smartphone($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('smartphones');
	}

	public function laptop($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('laptop');
	}

	public function tv($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tv');
	}

	public function tablet($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tablet');
	}
}
