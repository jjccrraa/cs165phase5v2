<?php
	class Pathologist_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_pathologist(){
			$query = $this->db->query("select * from Pathologist;");
			return $query->result();

		}

		public function add_pathologist(){
			
			$data = array(
				'first_name_path'  => $this->input->post('first_name_path'),
				'middle_name_path' => $this->input->post('middle_name_path'),
				'last_name_path'   => $this->input->post('last_name_path'),
				'name_suffix_path' => $this->input->post('name_suffix_path'),
			);

			return $this->db->insert('Pathologist', $data);
		}

		public function del_pathologist($id){
			$this -> db -> delete('Pathologist', array('user_id' => $id) );
			return;
		}
		
		public function edit_pathologist($id) {
			$query = $this->db->get_where('Pathologist', array('user_id' => $id ));
			return $query->result();
		}

		public function update_pathologist() {

			$data = array(
				'first_name_path'  => $this->input->post('first_name_path'),
				'middle_name_path' => $this->input->post('middle_name_path'),
				'last_name_path'   => $this->input->post('last_name_path'),
				'name_suffix_path' => $this->input->post('name_suffix_path'),
			);

			$this->db->where('user_id', $this->input->post('user_id'));
			return $this->db->update('Pathologist', $data);
		}
		
	}