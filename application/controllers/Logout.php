<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Logout extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Users_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		$this->session->sess_destroy();
		redirect("Login");
	}
}