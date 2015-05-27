<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pagination extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('input');
		$this->load->model('agenda/agenda_model');
	}
	public function index($offset=0)
	{
		// tentukan jumlah data per halaman
		$perpage = 3;
		// load library pagination
		$this->load->library('pagination');
		// konfigurasi tampilan paging
		$config = array(
			'base_url' => site_url('pagination/index'),
			'total_rows' => count($this->agenda_model->select_all()->result()),
			'per_page' => $perpage,
			'first_tag_open' => '<div>',
			'first_tag_close' => '</div>',
		);
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		// inisialisasi pagination dan config
		$this->pagination->initialize($config);
		$limit['perpage'] = $perpage;
		$limit['offset'] = $offset;
		$data['daftar_agenda'] = $this->agenda_model->select_all_paging($limit);
		$this->load->view('pagination/daftar_agenda_paging', $data);
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
