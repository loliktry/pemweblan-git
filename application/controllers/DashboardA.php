<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardA extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()	
	{
		$this->load->view('backend/dashboard/indexA');
	}

	public function template(){
		$data['content']    = 'backend/admin/content';        
        $this->load->view('templateA/backend/index', $data);
    }
    public function konten(){
		$data['content']    = 'backend/dashboard/indexA';        
        $this->load->view('templateA/backend/index', $data);
    }
}
