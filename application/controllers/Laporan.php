<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Laporan extends CI_Controller {

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
		$queryTahun = $this->db->query("SELECT DISTINCT tahun FROM tabel_ranking")->result();
		$data['thn'] = $queryTahun;
		$data['base_url'] = base_url();
		$data['page'] = "laporan";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('laporan_hasil',$data);
		$this->load->view('template/footer',$data);
	}

	public function filter() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$queryTahun = addslashes($this->input->get('t'));
		$data['base_url'] = base_url();
		$data['page'] = "laporan";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('laporan_hasil',$data);
		$this->load->view('template/footer',$data);
	}

	public function cetak() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$thn = addslashes($this->input->get('t'));
		//$hasil = $this->db->query("SELECT * form nilai where tahun='$thn'")->result();
		//$data['hasil'] =  $hasil;
		$data['base_url'] = base_url();
		$data['page'] = "cetak";
		$this->load->view('print_hasil',$data);
	}
}