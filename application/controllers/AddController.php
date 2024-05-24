<?php

class AddController extends CI_Controller
{
	public function add_smartphone()
	{
		$this->load->helper('url');
		$this->load->view('pages/add_products/add_page');
	}

	public function add_airphone()
	{
		$this->load->helper('url');
//		$this->load->view('templates/header');
		$this->load->view('pages/add_products/add_airphone');
//		$this->load->view('templates/footer');
	}
}
