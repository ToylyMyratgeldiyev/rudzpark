<?php

class GetProduct extends CI_Model
{
	public function index($id){
		$query = $this->db->get_where('smartphones', ['id' => $id]);
		return $query->row();
	}

	public function tablet($id){
		$query = $this->db->get_where('tablet', ['id' => $id]);
		return $query->row();
	}

	public function laptop($id){
		$query = $this->db->get_where('laptop', ['id' => $id]);
		return $query->row();
	}

	public function earphone($id){
		$query = $this->db->get_where('airphone', ['id' => $id]);
		return $query->row();
	}

	public function tv($id){
		$query = $this->db->get_where('tv', ['id' => $id]);
		return $query->row();
	}
}
