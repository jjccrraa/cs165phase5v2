<?php
	class Type extends CI_Controller{
		public function index(){

			$data['Type'] = $this->type_model->get_type();

			$this->load->view('templates/header');
			$this->load->view('type/index', $data);
			$this->load->view('templates/footer');
		}

		public function add(){

			$this->form_validation->set_rules('type_name', 'Type Name', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('type/add');
				$this->load->view('templates/footer');
			}
			else{
				$this->type_model->add_type();
				redirect('viewtype');
			}
		}

		public function del ($id) {
			$this->type_model->del_type($id);
			redirect('viewtype');
		}

		public function edit($id){

			$data['Type'] = $this->type_model->edit_type($id);

			$this->load->view('templates/header');
			$this->load->view('type/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){

			$this->form_validation->set_rules('type_name', 'Type Name', 'required');
			if ($this->form_validation->run() === FALSE) {
				redirect('edittype/'.$this->input->post('type_id'));
			}
			else{
				$this->type_model->update_type();
				redirect('viewtype');
			}

		}

	}