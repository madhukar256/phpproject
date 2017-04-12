<?php 

$this->load->helper("url");
$this->load->helper('form');
$this->load->library("pagination");
$this->load->helper('date');
$this->load->library('form_validation');
$this->load->library('upload');
$this->load->helper(array('form', 'url'));
$this->load->model('functions');
$this->load->model('user');
$this->load->model('room');
$this->load->model('restaurants');
$this->load->model('bar');
$this->load->model('newsmodel');

?>