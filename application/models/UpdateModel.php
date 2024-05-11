<?php


class UpdateModel extends CI_Model
{
	public function index($data,$id){
		return $this->db->update('smartphones',$data, array('id'=>$id));
	}
}
