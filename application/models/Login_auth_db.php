<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_auth_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function login($username, $password) {
		
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get()->row();
		
		if (!empty($query)) {
			
			return true;
			
		} else {
			
			return false;
			
		}
		
	}
	
	function get_user_data($username) {
		
		//$this->load->library('session');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);	
		$query = $this->db->get();
		
		$user_data = array(
			'username'	=> $query->row('username'),
			'id_user'	=> $query->row('id_user'),
			'name'	=> $query->row('nama_user'),
			'level'	=> $query->row('level')
			);
		
		return $user_data;
		
	}
	
}