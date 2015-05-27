<?php
class User_model extends CI_Model {
	function __construct(){
		parent::__construct();
		//$this->load->model('');
	}
	// mengambil data user tertentu
	function select_all_user(){
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get();
	}
	// cek keberadaan user di sistem
	function check_user_account($username, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get();
	}
	// mengambil data user tertentu
	function get_user($id_user){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		return $this->db->get();
	}
}
