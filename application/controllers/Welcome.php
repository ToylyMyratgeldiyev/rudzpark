<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('GetModel');
		$data['smartphones'] = $this->GetModel->getSmartphone();
		$this->load->view('index.php', $data);
	}
}
