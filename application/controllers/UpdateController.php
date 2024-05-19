<?php

class UpdateController extends CI_Controller
{
	public function updateSmartphone($id){
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
		$this->form_validation->set_rules('height', 'Высота', 'required');
		$this->form_validation->set_rules('width', 'Ширина', 'required');
		$this->form_validation->set_rules('weight', 'Вес', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');

		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);


		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];



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
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),
				'image_name' => $file_name,


			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->smartphone($data, $id);
			redirect('admin');
		}else{
			$this->edit();
		}
	}

	public function updateLaptop($id){
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
		$this->form_validation->set_rules('height', 'Высота', 'required');
		$this->form_validation->set_rules('width', 'Ширина', 'required');
		$this->form_validation->set_rules('weight', 'Вес', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');

		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);


		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];



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
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),
				'image_name' => $file_name,


			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->laptop($data, $id);
			redirect('admin');
		}else{
			echo validation_errors();
		}
	}

	public function updateTablet($id){
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
		$this->form_validation->set_rules('height', 'Высота', 'required');
		$this->form_validation->set_rules('width', 'Ширина', 'required');
		$this->form_validation->set_rules('weight', 'Вес', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');

		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);


		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];



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
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),
				'image_name' => $file_name,


			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->tablet($data, $id);
			redirect('admin');
		}else{
			$this->edit();
		}
	}

	public function updateTv($id){
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
		$this->form_validation->set_rules('height', 'Высота', 'required');
		$this->form_validation->set_rules('width', 'Ширина', 'required');
		$this->form_validation->set_rules('weight', 'Вес', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');

		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);


		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];



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
				'height' => $this->input->post("height"),
				'width' => $this->input->post("width"),
				'weight' => $this->input->post("weight"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),
				'image_name' => $file_name,


			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->tv($data, $id);
			redirect('admin');
		}else{
			$this->edit();
		}
	}

	public function updateEarphone($id){
		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];


		$this->form_validation->set_rules('manufacturer', 'Производитель', 'required');
		$this->form_validation->set_rules('model', 'Модель', 'required');
		$this->form_validation->set_rules('color', 'Цвет', 'required');
		$this->form_validation->set_rules('type', 'Тип', 'required');
		$this->form_validation->set_rules('connect', 'Тип подключение', 'required');
		$this->form_validation->set_rules('design', 'Конструкция', 'required');
		$this->form_validation->set_rules('made_in', 'Страна производителя', 'required');
		$this->form_validation->set_rules('warranty', 'Гарантия', 'required');
		$this->form_validation->set_rules('price', 'Цена', 'required');
		$this->form_validation->set_rules('discount', 'Скидка %', 'required');
		$this->form_validation->set_rules('availble', 'В наличии', 'required');


		if($this->form_validation->run()) {
			$data = array(
				'manufacturer' => $this->input->post("manufacturer"),//
				'model' => $this->input->post("model"),//
				'type' => $this->input->post("type"),//
				'connect' => $this->input->post("connect"),//
				'design' => $this->input->post("design"),//
				'made_in' => $this->input->post("made_in"),
				'color' => $this->input->post("color"),//
				'warranty' => $this->input->post("warranty"),//
				'price' => $this->input->post("price"),//
				'discount' => $this->input->post("discount"),//
				'availble' => $this->input->post("availble"),//
				'image_name' => $file_name,
			);
			$this->load->model('UpdateModel');
			$this->UpdateModel->earphone($data, $id);
			redirect('admin');
		}else{
			echo validation_errors();
		}
	}

}
