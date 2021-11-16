<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Santri extends CI_Controller {

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
		$data_santri = $this->db->query("SELECT * from tabel_santri")->result();
		$data['santri'] = $data_santri;
		$data['base_url'] = base_url();
		$data['page'] = "santri";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_santri',$data);
		$this->load->view('template/footer',$data);
	}

	public function delete(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->get("nisn"));
		$data_santri = $this->db->query("DELETE from tabel_santri where nisn='$nisn'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been deleted</div>");
			redirect('Santri');
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['page'] = "santri";
		$data['base_url'] = base_url();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('tambah_santri',$data);
		$this->load->view('template/footer',$data);
	}

	public function simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->post("nisn"));
		$nama_santri = addslashes($this->input->post("nama_santri"));
		$jenis_kelamin = addslashes($this->input->post("jenis_kelamin"));
		$asal_sekolah = addslashes($this->input->post("asal_sekolah"));


		$sql = "INSERT INTO tabel_santri VALUES ('$nisn', '$nama_santri','$jenis_kelamin','$asal_sekolah')";
		print_r($sql);
        $query = $this->db->query($sql);
        if ($query) {
        	$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
			redirect('Santri');
          
       }
	}

	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->get("nisn"));
		$data_santri = $this->db->query("SELECT * from tabel_santri where nisn='$nisn'")->result();
		$data['santri'] = $data_santri;
		$data['base_url'] = base_url();
		$data['page'] = "santri";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_santri',$data);
		$this->load->view('template/footer',$data);
	}

	public function submitedit(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->post("nisn"));
		$nama_santri = addslashes($this->input->post("nama_santri"));
		$jenis_kelamin = addslashes($this->input->post("jenis_kelamin"));
		$asal_sekolah = addslashes($this->input->post("asal_sekolah"));

		$sql = "UPDATE tabel_santri set
        nama_santri='$nama_santri',jenis_kelamin='$jenis_kelamin',asal_sekolah='$asal_sekolah'where nisn='$nisn'";

        $query = $this->db->query($sql);
        if ($query) {
        	$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
			redirect('Santri');
          
       }
       
	}
}