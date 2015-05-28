<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajaxsample extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('agenda/agenda_model');
		$this->load->helper('url');
		$this->load->helper('form');
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
        $this->load->view('backend/admin/form_cari_agenda', $data);
	}

	public function proses_cari_agenda(){
		$nama = $this->input->post('nama');
		$data['daftar_agenda'] = $this->agenda_model->select_by_nama($nama)->result();
		$this->load->view('backend/admin/view_list_agenda', $data);
	}

	// proses untuk memproses tambah agenda
	public function tambah_agenda(){
		//$data['content']    	= 'backend/admin/form_tambah_agenda';        		
        $this->load->view('backend/admin/form_tambah_agenda');
		
	}
	public function proses_tambah_agenda(){
		print_r($_POST);
		$data['nama'] 		= $this->input->post('nama');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['date_modified'] = date('Y-m-d');
		print_r($data);
		$this->agenda_model->insert_agenda($data);
	}


}
/* End of file ajaxsample.php */
/* Location: ./application/controllers/ajaxsample.php */
