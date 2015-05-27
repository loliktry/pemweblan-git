<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('template/back_end/header');
$this->load->view('template/back_end/sidebar');
$this->load->view($content);
$this->load->view('template/back_end/footer');