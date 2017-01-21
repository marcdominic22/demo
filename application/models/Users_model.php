<?php

class Users_model extends CI_Model {
	
	public function construct(){
		parent::__construct();
	}
	
	public function login ($username, $password) {
		$this->db->where('username', $username);
		
		$result = $this->db->get('users');
		$result = $result->result_array();
		
		if (strcmp($result[0]['password'], $password != 0)){
			return FALSE;
		}
		return TRUE;
	}
	
	public function login2 ($username, $password) {
		$this->db->where('username', $username);
		
		$result = $this->db->get('admin');
		$result = $result->result_array();
		
		if (strcmp($result[0]['password'], $password != 0)){
			return FALSE;
		}
		return TRUE;
	}
	
	public function insert_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		
		$sql = "INSERT INTO users (username, password, fname, lname)
		VALUES (" . $this->db->escape($username) . ",
				" . $this->db->escape($password) . ",
				" . $this->db->escape($fname) . ",
				" . $this->db->escape($lname) . ")";
				
		$result = $this->db->query($sql);
		
		if ($this->db->affected_rows() === 1){
			return $username;
		}
	}
	
}