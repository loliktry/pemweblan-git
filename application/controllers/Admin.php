<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('account/user_model');
        $this->load->helper('url');
        /*$this->load->helper('form');
        $this->load->library('form_validation','session');*/

    }
    // melihat halaman login
    public function index(){
        $data['content']    = 'backend/admin/content';        
        $this->load->view('template/back_end/index', $data);
    }

    public function user(){
       
        //$this->load->view('back_end/index', $data);     
      
        $data['user']       = $this->user_model->select_all_user()->result();       
        $data['content']    = 'backend/admin/user';
        $this->load->view('template/back_end/index', $data);
    }
}

