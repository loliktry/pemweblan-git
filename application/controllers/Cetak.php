<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cetak extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('account/user_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pdf');
		//$this->load->library('pdf');

	}
	function cetakpdf(){
				//load the view and saved it into $html variable
		$data['ok'] = "ok";
		$html=$this->load->view('cetak/cetak', $data, true);
		//this the the PDF filename that user will get to download
		$pdfFilePath = "output_pdf_name.pdf";
		//load mPDF library
		$this->load->library('pdf');
		$pdf = $this->pdf->load(); 
		$pdf->defaultheaderline = 1;
	    $pdf->defaultfooterline = 1;
	    $date = date('d-m-Y H:i:s');
	    $pdf->SetFooter('www.ok.or.id|Page {PAGENO} of {nb}|Printed ' . $date );
		$stylesheet = file_get_contents(base_url().'assets/css-mpdf/mpdfstyletables.css');
	    $pdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

		//generate the PDF from the given html
		$pdf->WriteHTML($html,2);
		
		//Output = D I 
		$pdf->Output($pdfFilePath, "I");

	}
}