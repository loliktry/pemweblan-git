<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->view('templateA/backend/header');
$this->load->view('templateA/backend/sidebar');
$this->load->view($content);
$this->load->view('templateA/backend/footer');