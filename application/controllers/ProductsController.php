<?php

class ProductsController extends CI_Controller
{
	public function index()
	{
		$this->load->model("GetModel");
		$data['smartphones'] = $this->GetModel->getSmartphone(); //Полученные данные передаем на страницу
		$this->load->view('pages/catalogs/catalog_smartphones.php',$data);
	}

	public function tablets()
	{
		$this->load->model("GetModel");
		$data['tablets'] = $this->GetModel->getTablet(); //Полученные данные передаем на страницу
		$this->load->view('pages/catalogs/catalog_tablets.php',$data);
	}

	public function earphone()
	{
		$this->load->model("GetModel");
		$data['earphones'] = $this->GetModel->getEarphone(); //Полученные данные передаем на страницуэ
		$this->load->view('pages/catalogs/catalog_earphones.php',$data);
	}

	public function laptops()
	{
		$this->load->model("GetModel");
		$data['laptops'] = $this->GetModel->getLaptop(); //Полученные данные передаем на страницу
		$this->load->view('pages/catalogs/catalog_laptops.php',$data);
	}

	public function tv()
	{
		$this->load->model("GetModel");
		$data['tv'] = $this->GetModel->getTv(); //Полученные данные передаем на страницу
		$this->load->view('pages/catalogs/catalog_tv.php',$data);
	}
}
