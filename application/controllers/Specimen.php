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
	}