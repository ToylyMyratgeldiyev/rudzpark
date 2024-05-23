<?php

class AdminController extends CI_Controller
{
    public function index(){
		$this->load->model("GetModel");
		$data['smartphones'] = $this->GetModel->getSmartphone(); //Полученные данные передаем на /admin
		$this->load->view('pages/admin.php', $data);
    }
}
