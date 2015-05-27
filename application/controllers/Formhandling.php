<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Formhandling extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->library('input');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('formhandling/form_register_user');
	}

	public function proses_register_user(){
		$this->form_validation->set_rules('nama', 'Nama', 'required|numeric|max_lenght');
		$this->form_validation->set_rules('samaran', 'Samaran', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('ulangpassword', 'Ulang Password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('umur', 'Umur', 'integer');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('formhandling/form_register_user');
		}
		else
		{
			$this->load->view('formhandling/success_register_user');
		}
	}

}

