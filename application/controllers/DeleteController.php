<?php

class DeleteController extends CI_Controller
{
	public function earphone($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->earphone($id);
		redirect('admin/earphones');
	}

	public function smartphone($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->smartphone($id);
		redirect('admin/smartphones');
	}

	public function tablet($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->laptop($id);
		redirect('admin/tablet');
	}

	public function laptop($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->tablet($id);
		redirect('admin/laptop');
	}

	public function tv($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->tv($id);
		redirect('admin/tv');
	}
}
