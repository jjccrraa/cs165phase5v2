<?php
	class Pathologist extends CI_Controller{
		public function index(){
			//$data['title'] = 'Latest Type';
			
			$data['Pathologist'] = $this->pathologist_model->get_pathologist();
			//print_r($data['Type']);

			$this->load->view('templates/header');
			$this->load->view('pathologist/index', $data);
			$this->load->view('templates/footer');
		}

		public function add(){
			$this->form_validation->set_rules('first_name_path', 'First Name', 'required');
			$this->form_validation->set_rules('last_name_path', 'Last Name', 'required');
			
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('pathologist/add');
				$this->load->view('templates/footer');
			}
			else{
				$this->pathologist_model->add_pathologist();
				redirect('viewpathologist');
			}
		}


		public function del ($id) {
			$this->pathologist_model->del_pathologist($id);
			redirect('viewpathologist');
		}

		public function update(){ # update form
			$this->form_validation->set_rules('first_name_path', 'First Name', 'required');
			$this->form_validation->set_rules('last_name_path', 'Last Name', 'required');

			if ($this->form_validation->run() === FALSE){
				redirect('editpathologist/'.$this->input->post('user_id'));
			}
			else{
				$this->pathologist_model->update_pathologist();
				redirect('viewpathologist');
			}
		}

		public function edit($id){ # update form submit

			$data['Pathologist'] = $this->pathologist_model->edit_pathologist($id);

			$this->load->view('templates/header');
			$this->load->view('pathologist/edit', $data);
			$this->load->view('templates/footer');
		}
	}