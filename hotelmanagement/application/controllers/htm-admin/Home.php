<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	  include 'lib.php';
		
	}
	
	/**************admin front page process***********/
	public function index()
	{
		if($this->session->userdata('admin_id') == ''){
		$data['title']= 'LOGIN ADMIN';
		$this->load->view("admin/login-template.php", $data);
		}
		else
		{
			$data['title']= 'DASHBOARD';
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/home.php", $data);
			$this->load->view("admin/footer.php", $data);
		}
	}
	

	
	
}
?>