<?php
	class Type_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_type(){
			$query = $this->db->query("select * from Type;");
			return $query->result();

		}

		public function add_type(){
			$type_name = $this->input->post('type_name'); 
			$sql = "INSERT INTO Type (type_name) VALUES ('" .$type_name. "');";
			$this->db->query($sql);
			return;	
		}

		public function del_type($id){
			$sql = "DELETE FROM Type WHERE type_id = ".$id.";";
			$this->db->query($sql);
			return;
		}

		public function edit_type($id){
			$sql = "SELECT * FROM Type WHERE type_id = ".$id.";";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function update_type(){
			$type_id = $this->input->post('type_id');
			$type_name = $this->input->post('type_name');
			$sql = "UPDATE Type Set type_name='".$type_name."' WHERE type_id=".$type_id.";";
			$this->db->query($sql);
			return;
		}

	}