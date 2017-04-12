<?php 

$this->load->helper("url");
$this->load->helper('form');
$this->load->library("pagination");
$this->load->helper('date');
$this->load->library('form_validation');
$this->load->library('upload');
$this->load->helper(array('form', 'url'));
$this->load->model('admin_access');
$this->load->model('admin_rooms');
$this->load->model('admin_restaurant');
$this->load->model('admin_bar');
$this->load->model('admin_news');

?>