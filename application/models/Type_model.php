<?php
	class Type_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_type(){
			//$query = $this->db->get_where('Type');
			//return $query->row_array();
			$query = $this->db->get("Type"); 
			return $query->result();

		}

		public function add_type(){
			$data = array(
				'type_name' => $this->input->post('type_name')
			);

			return $this->db->insert('Type', $data);
		}

		public function del_type($id){
			$this -> db -> delete('Type', array('type_id' => $id) );
			return;
		}

		public function edit_type($id){
			$query = $this->db->get_where('Type', array('type_id' => $id ));
			return $query->result();
		}

		public function update_type(){
			$data = array(
				'type_name' => $this->input->post('type_name')
			);

			$this->db->where('type_id', $this->input->post('type_id'));
			return $this->db->update('Type', $data);
		}

	}