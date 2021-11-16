<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Users_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function select() {
		
		$this->db->select('*');
		$this->db->from('users');	
		$query = $this->db->get();
        return $result = $query->result();
		
	}

	function add_user($nama,$username,$password,$email,$foto,$alamat,$telp,$gender) {
		$query="insert into users values('','$nama','$username','$password','$email','$foto','$alamat','$telp','$gender')";
		$this->db->query($query);
       
		
	}

	function update_user($nama,$username,$password,$email,$foto,$alamat,$telp,$gender) {
		$query="UPDATE users SET nama_user='$nama',username='$username',password='$password',email='$email',user_img='$foto',alamat_user='$alamat',telp='$telp',gender='$gender'";
		$this->db->query($query);
       
		
	}
	
}