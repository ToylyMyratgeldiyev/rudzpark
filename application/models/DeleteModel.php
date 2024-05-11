<?php

class DeleteModel extends CI_Model
{
	public function index($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('smartphones');
	}
}
