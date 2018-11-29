<?php
	class Specimen extends CI_Controller{
		public function index(){
			//$data['title'] = 'Latest Type';
			
			$data['Specimen'] = $this->specimen_model->get_specimen();
			//print_r($data['Type']);

			$this->load->view('templates/header');
			$this->load->view('specimen/index', $data);
			$this->load->view('templates/footer');
		}


		public function del ($id) {
			$this->specimen_model->del_specimen($id);
			redirect('viewspecimen');
		}

		public function add(){
			$this->form_validation->set_rules('PatientID', 'Patient ID', 'required');
			$this->form_validation->set_rules('TypeID', 'Type ID', 'required');
			$this->form_validation->set_rules('ConditionID', 'Condition ID', 'required');
			
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('specimen/add');
				$this->load->view('templates/footer');
			}
			else{
				$this->specimen_model->add_specimen();
				redirect('viewspecimen');
			}
		}
	}