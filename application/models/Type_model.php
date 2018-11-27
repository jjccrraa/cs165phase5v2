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

		public function delete($id){
			$this->db->delete('Type', array('type_id' => $id));
			return;
		}

	}