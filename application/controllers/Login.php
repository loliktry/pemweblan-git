<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('account/user_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation','session');

	}
	// melihat halaman login
	public function index(){
		$this->load->view('account/form_login');
	}
	//................................................................................................
	// memeriksa keberadaan akun username
	public function login(){
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password', 'true');
		$temp_account = $this->user_model->check_user_account($username, $password)->row();
		// check account
		$num_account = count($temp_account);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login/form_login');
		}
		else
		{
			if ($num_account > 0){
				// kalau ada set session
				$array_items = array(
					'id_user' => $temp_account->id_user,
					'username' => $temp_account->username,
					'logged_in' => true,
					'level'=>$temp_account->level,
				);
				$this->session->set_userdata($array_items);

				redirect(site_url('login/view_success_page/'));
			}
			else {
				// kalau ga ada diredirect lagi ke halaman login
				$this->session->set_flashdata('notification', 'Peringatan : Username dan Password
				tidak cocok');
				redirect(site_url('login'));
				//base_url().'acoount/login';
				
				//site_url()

			}
		}
	}

	public function view_success_page(){
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!$logged_in){
		redirect(site_url('login/index'));
		}
		if ($level==1){
			$this->load->view('account/user_level_1');
		}elseif($level==2){
			$this->load->view('account/user_level_2');
		}

		//$this->load->view('account/success_page');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}

	public function harus_login(){
		if($this->session->userdata('logged_in')==TRUE){
			$this->load->view('account/success_page');
		}else{
			$this->load->view('account/gaklogin');
		}
	}




}

