<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('templateB/backend/header');
$this->load->view('templateB/backend/sidebar');
$this->load->view($content);
$this->load->view('templateB/backend/footer');

