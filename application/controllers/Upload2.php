<?php
/**
 * Class upload
 */
class Upload2 extends CI_Controller{
	var $coba ="test";

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');

	}

	function index(){
		$this->load->view('uploadsample/form_upload', array('salah'=>''));
	
	}

	//mengeksekusi proses upload
	public function proses_upload(){

		//inputan dari form
		$judul = $this->input->post('judul');


		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size'] = '100M';
		//$config['max_width'] = '1024';
		//$config['max_height'] = '768';
		
		//load library upload
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()){
			$salah = array('salah'=>$this->upload->display_errors());
			$this->load->view('uploadsample/form_upload', $salah);
		}
		else {
			$upload_data = $this->upload->data();
			$upload_data['judul'] = $judul;
			$data = array('upload_data' => $upload_data);
			$this->load->view('uploadsample/view_upload_success', $data);
		}
	}


}
?>