<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Aras extends CI_Controller {

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
		$data_santri = $this->db->query("SELECT * from tabel_kriteria left join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn")->result();
		$data_tahun = $this->db->query("SELECT DISTINCT tahun FROM tabel_kriteria ORDER BY tahun DESC")->result();

		$data['kriteria'] = $data_santri;
		$data['tahun'] = $data_tahun;
		$data['base_url'] = base_url();
		$data['page'] = "hitung_aras";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('hitung_aras',$data);
		$this->load->view('template/footer',$data);
	}
}