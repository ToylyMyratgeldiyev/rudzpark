<?php


class UpdateModel extends CI_Model
{
	public function smartphone($data,$id){
		return $this->db->update('smartphones',$data, array('id'=>$id));
	}
	public function tablet($data,$id){
		return $this->db->update('tablet',$data, array('id'=>$id));
	}

	public function laptop($data,$id){
		return $this->db->update('laptop',$data, array('id'=>$id));
	}


	public function tv($data,$id){
		return $this->db->update('tv',$data, array('id'=>$id));
	}

	public function earphone($data,$id){
		return $this->db->update('airphone',$data, array('id'=>$id));
	}
}
