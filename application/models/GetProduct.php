<?php

class GetProduct extends CI_Model
{
	public function index($id){
		$query = $this->db->get_where('smartphones', ['id' => $id]);
		return $query->row();
	}
}
