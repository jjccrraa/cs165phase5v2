<?php
	class Conditions extends CI_Controller{
		public function index(){
			//$data['title'] = 'Latest Type';

			$data['Conditions'] = $this->conditions_model->get_condition();
			//print_r($data['Type']);

			$this->load->view('templates/header');
			$this->load->view('conditions/index', $data);
			$this->load->view('templates/footer');
		}
	}