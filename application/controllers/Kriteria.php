<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Kriteria extends CI_Controller {

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
		$data_kriteria = $this->db->query("SELECT * from tabel_kriteria left join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn")->result();
		$tabel_bobot = $this->db->query("SELECT * from tabel_bobot")->result();
		$data['kriteria'] = $data_kriteria;
		$data['bobot'] = $tabel_bobot;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_santri = $this->db->query("SELECT * from tabel_santri")->result();
		$data['santri'] = $data_santri;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('tambah_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses_simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->post("nisn"));
        $c1 =  addslashes($this->input->post("c1"));
        $c2 =  addslashes($this->input->post("c2"));
        $c3 =  addslashes($this->input->post("c3"));
        $c4 =  addslashes($this->input->post("c4"));
        $c5 =  addslashes($this->input->post("c5"));
        $c6 =  addslashes($this->input->post("c6"));
        $tahun =  addslashes($this->input->post("thn"));

        $sql = "INSERT INTO tabel_kriteria values ('','$nisn','$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$tahun')";
        $simpan = $this->db->query($sql);

        if($simpan){
        	redirect('Kriteria');
        }
    }

	public function delete(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$id = addslashes($this->input->get("id"));
		$data_santri = $this->db->query("DELETE from tabel_kriteria where id_kriteria='$id'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been deleted</div>");
			redirect('Kriteria');
	}

	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$idk = addslashes($this->input->get("id"));
		$data_kriteria = $this->db->query("SELECT * from tabel_kriteria left join tabel_santri on tabel_kriteria.nisn=tabel_santri.nisn where tabel_kriteria.id_kriteria='$idk'")->result();
		$data_santri = $this->db->query("SELECT * from tabel_santri")->result();
		$data['kriteria'] = $data_kriteria;
		$data['santri'] = $data_santri;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses_edit(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nisn = addslashes($this->input->post("nisn"));
        $id =  addslashes($this->input->post("id"));
        $c1 =  addslashes($this->input->post("c1"));
        $c2 =  addslashes($this->input->post("c2"));
        $c3 =  addslashes($this->input->post("c3"));
        $c4 =  addslashes($this->input->post("c4"));
        $c5 =  addslashes($this->input->post("c5"));
        $c6 =  addslashes($this->input->post("c6"));
        $tahun =  addslashes($this->input->post("thn"));

        $sql = "UPDATE tabel_kriteria set c1=$c1, c2=$c2, c3=$c3, c4=$c4, c5=$c5, c6=$c6, nisn='$nisn', tahun='$tahun' where id_kriteria='$id'";
        $simpan = $this->db->query($sql);

        if($simpan){
        	redirect('Kriteria');
        }
    }

}