<?php

class EditController extends CI_Controller
{
	public function editSmartphone($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['smartphones'] = $this->EditModel->smartphones($id);
		$this->load->view('pages/edit/edit_smartphone_page',$data);
	}

	public function editTablet($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['tablets'] = $this->EditModel->tablets($id);
		$this->load->view('pages/edit/edit_tablet_page',$data);
	}

	public function editLaptop($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['laptops'] = $this->EditModel->laptops($id);
		$this->load->view('pages/edit/edit_laptop_page',$data);
	}

	public function editTV($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['tv'] = $this->EditModel->tv($id);
		$this->load->view('pages/edit/edit_tv_page',$data);
	}

	public function editEarphone($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['earphones'] = $this->EditModel->earphones($id);
		$this->load->view('pages/edit/edit_earphone_page',$data);
	}
}
