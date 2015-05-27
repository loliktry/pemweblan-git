<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadsample extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('agenda/agenda_model');
	}

	public function index()
	{
		$data['content']    = 'backend/admin/form_upload';        
		$data['error']		= '';
        $this->load->view('templateB/backend/index', $data);
		//$this->load->view('', array('error'=>''));
	}

	public function proses_upload(){
		$judul = $this->input->post('judul');
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload()){
			$data['error'] 		= $this->upload->display_errors();
			$data['content']    = 'backend/admin/form_upload';        			
	        $this->load->view('templateB/backend/index', $data);
			
		}
		else {

			if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
				$path_info 			= pathinfo($_FILES["userfile"]["name"]);
				$fileExtension 		= $path_info['extension'];
				$YmdHis_papername 	= date('YmdHis');				
				$filename 			= 'file__'.$YmdHis_papername;			
				$file_name 			= $filename.'.'.$fileExtension;

			}

			$upload_data = $this->upload->data();
			$upload_data['judul'] 	= $judul;
			$upload_data['judulx'] 	= $file_name;
			$data = array('upload_data' => $upload_data);
			$data['content']    = 'backend/admin/view_upload_sukses';        			
	        $this->load->view('templateB/backend/index', $data);
			//$this->load->view('backend/admin/view_upload_sukses', $data);
		}
	}

	public function proses_uploadxx(){
		$judul = $this->input->post('judul');
		
		//mengecek file sudah terset untuk diupload(file terpilih)
		if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
			//pathinfo = nama-file dari file yg di upload
			$path_info 			= pathinfo($_FILES["userfile"]["name"]);
			//mengambil ekstensinya saja
			$fileExtension 		= $path_info['extension'];


			//membuat nama file sesuai keinginan--->menggunakan tanggal
			$YmdHis_papername 	= date('YmdHis');				
			//menyatukan string nama tanggal dan 'file___'
			$filename 			= 'file__'.$YmdHis_papername;

			//menyatukan nama file terakhir dengan ekstensi yang diambil dari proses line 65
			$file_name 			= $filename.'.'.$fileExtension;

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '100';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';
			//merubah nama file menjadi sesaui proses line 74
			$config['file_name'] = $file_name;
			
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()){
				$data['error'] 		= $this->upload->display_errors();
				$data['content']    = 'backend/admin/form_upload';        			
		        $this->load->view('templateB/backend/index', $data);
				
			}
			else {
				$upload_data = $this->upload->data();
				//menambahkan data dalam tabel
				$tambahfile = array('judul'=>$judul,'namafile'=>$file_name);
				$this->agenda_model->tambahfile($tambahfile);

				$upload_data['judul'] 	= $judul;
				$upload_data['judulx'] 	= $file_name;
				$data = array('upload_data' => $upload_data);
				$data['content']    = 'backend/admin/view_upload_sukses';        			
		        $this->load->view('templateB/backend/index', $data);
				//$this->load->view('backend/admin/view_upload_sukses', $data);
			}
		}
	}


	
}
/* End of file uploadsample.php */
/* Location: ./application/controllers/uploadsample.php */
