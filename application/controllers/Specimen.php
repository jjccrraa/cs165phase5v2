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

		public function add(){
			// $this->form_validation->set_rules('patient_id', 'Patient ID', 'required');
			$data['Patient'] = $this->specimen_model->get_patient();
			$data['Type'] = $this->specimen_model->get_type();
			$data['Conditions'] = $this->specimen_model->get_conditions();
			// $this->form_validation->set_rules('condition_id', 'Condition ID', 'required');
			$this->form_validation->set_rules('patient_id', 'Patient', 'required');
			$this->form_validation->set_rules('type_id', 'Type', 'required');
			$this->form_validation->set_rules('condition_id', 'Condition', 'required');
			
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('specimen/add', $data);
				$this->load->view('templates/footer');
			}
			else{
				$this->specimen_model->add_specimen();
				redirect('viewspecimen');
			}
		}

		public function del ($id) {
			$this->specimen_model->del_specimen($id);
			redirect('viewspecimen');
		}

		public function update(){ # update form
			$this->form_validation->set_rules('patient_id', 'Patient', 'required');
			$this->form_validation->set_rules('type_id', 'Type', 'required');
			$this->form_validation->set_rules('condition_id', 'Condition', 'required');
			
			if ($this->form_validation->run() === FALSE){
				redirect('editspecimen/'.$this->input->post('specimen_id'));
			}
			else{
				$this->specimen_model->update_specimen();
				redirect('viewspecimen');
			}
		}

		public function edit($id){ # update form submit

			$data['Specimen'] = $this->specimen_model->edit_specimen($id);
			$data['Patient'] = $this->specimen_model->get_patient();
			$data['Type'] = $this->specimen_model->get_type();
			$data['Conditions'] = $this->specimen_model->get_conditions();
			

			$this->load->view('templates/header');
			$this->load->view('specimen/edit', $data);
			$this->load->view('templates/footer');
		}
	}