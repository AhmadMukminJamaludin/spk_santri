<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Bobot extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Users_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		if(!$this->session->logged_in){
			redirect("login");
		}
		$data_kriteria = $this->db->query("SELECT * from tabel_bobot")->result();
		$data['bobot'] = $data_kriteria;
		$data['base_url'] = base_url();
		$data['page'] = "bobot";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_bobot',$data);
		$this->load->view('template/footer',$data);
	}

	
	public function simpan(){
		if(!$this->session->logged_in){
			redirect("login");
		}
        $c1 = addslashes($this->input->post("c1"));
        $c2 = addslashes($this->input->post("c2"));
        $c3 = addslashes($this->input->post("c3"));
        $c4 = addslashes($this->input->post("c4"));
        $c5 = addslashes($this->input->post("c5"));
        $c6 = addslashes($this->input->post("c6"));
        

        $sql = "UPDATE tabel_bobot set w1=$c1, w2=$c2, w3=$c3, w4=$c4, w5=$c5, w6=$c6";
        $query =$this->db->query($sql);
        if ($query) {
          echo "<script>window.alert('Data Berhasil di Ubah');
                window.location=(href='".base_url()."Kriteria')</script>";
        }else{
          echo "<script>window.alert('Gagal ubah data');
                window.location=(href='Kriteria')</script>";
        }
	}

}