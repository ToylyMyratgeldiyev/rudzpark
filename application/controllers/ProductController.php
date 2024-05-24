<?php

class ProductController extends CI_Controller
{
	public function index($id)
	{
		$this->load->model('GetProduct');
		$data['smartphones'] = $this->GetProduct->index($id);
		$this->load->view('pages/products/product_smartphone',$data);

	}

	public function tablet($id)
	{
		$this->load->model('GetProduct');
		$data['tablet'] = $this->GetProduct->tablet($id);
		$this->load->view('pages/products/product_tablet',$data);
	}

	public function laptop($id)
	{
		$this->load->model('GetProduct');
		$data['laptop'] = $this->GetProduct->laptop($id);
		$this->load->view('pages/products/product_laptop',$data);
	}

	public function earphone($id)
	{
		$this->load->model('GetProduct');
		$data['earphone'] = $this->GetProduct->earphone($id);
		$this->load->view('pages/products/product_earphone',$data);
	}

	public function tv($id)
	{
		$this->load->model('GetProduct');
		$data['tv'] = $this->GetProduct->tv($id);
		$this->load->view('pages/products/product_tv',$data);
	}
}
