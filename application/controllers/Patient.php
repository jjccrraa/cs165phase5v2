<?php
	class Patient extends CI_Controller{
		public function index(){
			//$data['title'] = 'Latest Type';
			
			$data['Patient'] = $this->patient_model->get_patient();
			//print_r($data['Type']);

			$this->load->view('templates/header');
			$this->load->view('patient/index', $data);
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');																																																																																																		
			$this->form_validation->set_rules('sex', 'Gender (Male/Female/Others)', 'required');
			$this->form_validation->set_rules('birthdate', 'YYYY-MM-DD', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('patient/add');
				$this->load->view('templates/footer');
			}
			else{
				$this->patient_model->add_patient();
				redirect('viewpatient');
			}
		}

		public function delete($id){
			$this->patient_model->delete($id);
			redirect('viewpatient');
		}

	}