<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Home extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Users_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['base_url'] = base_url();
		$data['page'] = "home";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('index',$data);
		$this->load->view('template/footer',$data);
	}
}