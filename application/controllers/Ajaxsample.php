<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajaxsample extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('agenda/agenda_model');
		$this->load->helper('url');
		
	}
	// melihat halaman utama
	public function index(){
		
		$data['content']    = 'backend/admin/view_daftar_agenda_ajax';        		
        $this->load->view('templateB/backend/index', $data);
	}
	// proses untuk melihat detail agenda
	public function lihat_agenda(){
		$data['daftar_agenda'] 	= $this->agenda_model->select_all()->result();		
        $this->load->view('backend/admin/view_list_agenda', $data);
	}

	public function cari_agenda(){
		
		$data['content']    	= 'backend/admin/form_cari_agenda';        		
        $this->load->view('templateB/backend/index', $data);
	}

	public function proses_cari_agenda(){
		$nama = $this->input->post('nama');
		$data['daftar_agenda'] = $this->agenda_model->select_by_nama($nama)->result();
		$this->load->view('ajaxsample/view_list_agenda', $data);
	}


}
/* End of file ajaxsample.php */
/* Location: ./application/controllers/ajaxsample.php */
