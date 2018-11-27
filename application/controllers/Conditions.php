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

		public function add(){

			$this->form_validation->set_rules('condition_name', 'Condition Name', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('conditions/add');
				$this->load->view('templates/footer');
			}
			else{
				$this->conditions_model->add_condition();
				redirect('viewconditions');
			}
		}

		public function delete($id){
			$this->conditions_model->delete($id);
			redirect('viewconditions');
		}
	}