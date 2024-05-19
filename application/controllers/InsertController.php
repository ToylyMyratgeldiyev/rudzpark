<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class InsertController extends CI_Controller
{
	public function index()
	{
		//работа с картинкой
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = true;         //зашифровка имени, по умолчанию false;
		$config['upload_path'] = './my_uploads/';
		$this->load->library('upload', $config);


		if ($this->upload->do_upload('image')) { //do_upload() загружает файл и возвращает bool
			print_r($this->upload->data()); // распечатать данные ['full_path'] путь к файлу;
		} else {
			print_r($this->upload->display_errors()); // распечатать ошибку
		}

		$upload_data = $this->upload->data();
		$file_path = $upload_data['full_path'];
		$file_name = $upload_data['file_name'];


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
		$this->form_validation->set_rules('available', 'Вналичии', 'required');

		if ($this->form_validation->run()) {
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
				'discount' => $this->input->post("discount"),
				'available' => $this->input->post("available"),
				'image_name' => $file_name,

			);
			$categories = $this->input->post('categories');
			$this->load->model('InsertModel');

			switch ($categories) {
				case 'laptop':
					$this->InsertModel->insertLaptop($data);
					break;

				case 'smartphone':
					$this->InsertModel->insertSmartphone($data);
					break;

				case 'tablet':
					$this->InsertModel->insertTablet($data);
					break;

				case 'TV':
					$this->InsertModel->insertTV($data);
					break;
			}

			redirect('admin');
		} else {
			$this->add_smartphone();
		}

	}

	public function insert_airphone()
	{
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
		$this->form_validation->set_rules('availble', 'В наличии', 'required');

		if ($this->form_validation->run()) {
//			echo 'valid';
			$data = array(
				'manufacturer' => $this->input->post("manufacturer"),
				'model' => $this->input->post("model"),
				'type' => $this->input->post("type"),
				'connect' => $this->input->post("connect"),
				'design' => $this->input->post("design"),
				'made_in' => $this->input->post("made_in"),
				'color' => $this->input->post("color"),
				'warranty' => $this->input->post("warranty"),
				'price' => $this->input->post("price"),
				'discount' => $this->input->post("discount"),
				'availble' => $this->input->post("availble"),
				'image_name' => $file_name,

			);
			$this->load->model('InsertModel');
			$this->InsertModel->insertEarphone($data);
			redirect('admin');

		} else {
			echo validation_errors();
		}
	}
}
