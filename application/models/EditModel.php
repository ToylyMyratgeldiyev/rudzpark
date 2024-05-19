<?php

class EditModel extends CI_Model
{
	public function smartphones($id)
	{
		$query = $this->db->get_where('smartphones', ['id' => $id]);
		return $query->row();
	}

	public function laptops($id)
	{
		$query = $this->db->get_where('laptop', ['id' => $id]);
		return $query->row();
	}

	public function tablets($id)
	{
		$query = $this->db->get_where('tablet', ['id' => $id]);
		return $query->row();
	}

	public function tv($id)
	{
		$query = $this->db->get_where('tv', ['id' => $id]);
		return $query->row();
	}

	public function earphones($id)
	{
		$query = $this->db->get_where('airphone', ['id' => $id]);
		return $query->row();
	}
}
