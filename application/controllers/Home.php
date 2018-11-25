<?php
	class Home extends CI_Controller {
		public function index($page = 'home') {

			$data['title'] = 'Specimen Inventory'; 

			$this->load->view('templates/header');
			$this->load->view('home/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}