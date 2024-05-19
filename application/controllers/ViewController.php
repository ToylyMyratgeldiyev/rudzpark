<?php

class ViewController extends CI_Controller
{
	public function smartphones()
	{
		$this->load->model("GetModel");
		$data['smartphones'] = $this->GetModel->getSmartphone();
		$this->load->view('templates/header');
		$this->load->view('pages/smartphones.php',$data);
		$this->load->view('templates/footer');
	}

	public function laptop()
	{
		$this->load->model("GetModel");
		$data['laptops'] = $this->GetModel->getLaptop();
		$this->load->view('templates/header');
		$this->load->view('pages/laptop.php',$data);
		$this->load->view('templates/footer');
	}

	public function tv()
	{
		$this->load->model("GetModel");
		$data['tv'] = $this->GetModel->getTv();
		$this->load->view('templates/header');
		$this->load->view('pages/TV.php',$data);
		$this->load->view('templates/footer');
	}

	public function tablet()
	{
		$this->load->model("GetModel");
		$data['tablets'] = $this->GetModel->getTablet();
		$this->load->view('templates/header');
		$this->load->view('pages/tablet.php',$data);
		$this->load->view('templates/footer');
	}

	public function earphones()
	{
		$this->load->model("GetModel");
		$data['earphones'] = $this->GetModel->getEarphone();
		$this->load->view('templates/header');
		$this->load->view('pages/earphones.php',$data);
		$this->load->view('templates/footer');
	}
}
