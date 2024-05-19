<?php

class ProductsController extends CI_Controller
{
	public function index()
	{
		$this->load->model("GetModel");
		$data['smartphones'] = $this->GetModel->getSmartphone(); //Полученные данные передаем на /admin
		$this->load->view('pages/products.php',$data);
	}
}
