<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardB extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('agenda/agenda_model');
	}

	public function index()	
	{
		$this->load->view('backend/dashboard/indexA');
	}

	public function tampilan(){
		$data['content']    = 'backend/admin/content';        
        $this->load->view('templateB/backend/index', $data);
    }

    public function isitengah(){
		$data['content']    = 'backend/admin/isitengah';        
        $this->load->view('templateB/backend/index', $data);
    }

    public function sampletabel(){
    	$data['agenda']		= $this->agenda_model->select_all()->result();
    	/*echo print_r($data['agenda']);*/
		$data['content']    = 'backend/admin/sampletabel';        
        $this->load->view('templateB/backend/index', $data);
    }

    public function konten(){
		$data['content']    = 'backend/dashboard/indexA';        
        $this->load->view('templateA/backend/index', $data);
    }
    public function datadiri(){
		$data['content']    = 'backend/admin/datadiri';        
        $this->load->view('templateB/backend/index', $data);
    }

    public function tabel(){
    	$data['user']       = $this->user_model->select_all_user()->result();       
		$data['content']    = 'backend/admin/tabel';        
        $this->load->view('templateB/backend/index', $data);
    }
}
