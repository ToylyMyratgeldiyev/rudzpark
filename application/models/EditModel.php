<?php

class EditModel extends CI_Model
{
	public function index($id)
	{
		$query = $this->db->get_where('smartphones', ['id' => $id]);  //id неправильный
		return $query->row();
	}
}
