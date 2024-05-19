<?php

class AddController extends CI_Controller
{
	public function add_smartphone()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('pages/add_page');
		$this->load->view('templates/footer');
	}

	public function add_airphone()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('pages/add_airphone');
		$this->load->view('templates/footer');
	}
}
