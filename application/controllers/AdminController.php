<?php

class AdminController extends CI_Controller
{
    public function index(){
        $this->load->view('templates/header');
		$this->load->model("GetModel");
		$data['smartphones'] = $this->GetModel->getSmartphone(); //Полученные данные передаем на /admin
		$this->load->view('pages/admin.php', $data);
		$this->load->view('templates/footer');
    }

    public function add_smartphone()
    {
         $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('pages/add_page');
		 $this->load->view('templates/footer');
    }

	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->model('EditModel');
		$data['smartphones'] = $this->EditModel->index($id);
		$this->load->view('pages/edit_page',$data);
	}

	public function update($id){
		$this->form_validation->set_rules('manufacturer', 'Производитель', 'required');
		$this->form_validation->set_rules('model', 'Модель', 'required');
		$this->form_validation->set_rules('OS', 'Операционная система', 'required');
		$this->form_validation->set_rules('color', 'Цвет', 'required');
		$this->form_validation->set_rules('diagonal', 'Диоганаль экрана', 'required');
		$this->form_validation->set_rules('screen_tech', 'Технология экрана', 'required');
		$this->form_validation->set_rules('memory', 'Память', 'required');
		$this->form_validation->set_rules('internal_memory', 'Встроенная Память', 'required');
		$this->form_validation->set_rules('camera', 'Камера', 'required');
		$this->form_validation->set_rules('accumulator', 'Аккумулятор', 'required');
		$this->form_validation->set_rules('connect', 'Разъем для питания', 'required');
		$this->form_validation->set_rules('height', 'Высота', 'required');
		$this->form_validation->set_rules('width', 'Ширина', 'required');
		$this->form_validation->set_rules('weight', 'Вес', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');

		if($this->form_validation->run()) {
			$data = array(
				'manufacturer' => $this->input->post("manufacturer"),
				'model' => $this->input->post("model"),
				'OS' => $this->input->post("OS"),
				'color' => $this->input->post("color"),
				'diagonal' => $this->input->post("diagonal"),
				'screen_tech' => $this->input->post("screen_tech"),
				'memory' => $this->input->post("memory"),
				'internal_memory' => $this->input->post("internal_memory"),
				'camera' => $this->input->post("camera"),
				'accumulator' => $this->input->post("accumulator"),
				'connect' => $this->input->post("connect"),
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),

			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->index($data, $id);
			redirect('admin');
		}else{
			$this->edit();
		}
	}

	public function delete($id)
	{
		$this->load->model('DeleteModel');
		$this->DeleteModel->index($id);
		redirect('admin');
	}

    public function store()
    {
        $this->form_validation->set_rules('manufacturer', 'Производитель', 'required');
        $this->form_validation->set_rules('model', 'Модель', 'required');
        $this->form_validation->set_rules('OS', 'Операционная система', 'required');
        $this->form_validation->set_rules('color', 'Цвет', 'required');
        $this->form_validation->set_rules('diagonal', 'Диоганаль экрана', 'required');
        $this->form_validation->set_rules('screen_tech', 'Технология экрана', 'required');
        $this->form_validation->set_rules('memory', 'Память', 'required');
        $this->form_validation->set_rules('internal_memory', 'Встроенная Память', 'required');
        $this->form_validation->set_rules('camera', 'Камера', 'required');
        $this->form_validation->set_rules('accumulator', 'Аккумулятор', 'required');
        $this->form_validation->set_rules('connect', 'Разъем для питания', 'required');
        $this->form_validation->set_rules('height', 'Высота', 'required');
        $this->form_validation->set_rules('width', 'Ширина', 'required');
        $this->form_validation->set_rules('weight', 'Вес', 'required');
        $this->form_validation->set_rules('warranty', 'Гарантия', 'required');
        $this->form_validation->set_rules('price', 'Цена', 'required');

        if($this->form_validation->run()){
            $data = array(
				'manufacturer' => $this->input->post("manufacturer"),
				'model' => $this->input->post("model"),
				'OS' => $this->input->post("OS"),
				'color' => $this->input->post("color"),
				'diagonal' => $this->input->post("diagonal"),
				'screen_tech' => $this->input->post("screen_tech"),
				'memory' => $this->input->post("memory"),
				'internal_memory' => $this->input->post("internal_memory"),
				'camera' => $this->input->post("camera"),
				'accumulator' => $this->input->post("accumulator"),
				'connect' => $this->input->post("connect"),
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),

			);
            $this->load->model('InsertModel');
			$this->InsertModel->insertSmartphone($data);
			redirect('admin');
		}else{
			$this->add_smartphone();
		}
        
    }
}
