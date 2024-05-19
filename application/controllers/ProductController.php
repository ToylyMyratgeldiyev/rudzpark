<?php

class ProductController extends CI_Controller
{
	public function index($id)
	{
		$this->load->model('GetProduct');
		$data['smartphones'] = $this->GetProduct->index($id);
		$this->load->view('pages/product',$data);

	}
}
