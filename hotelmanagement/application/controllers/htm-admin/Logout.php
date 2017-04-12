<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		include 'lib.php';
		
	}
	
	/**************admin front page process***********/
	public function index()
	{
		$newdata = array(
		'admin_id'   =>'',
		'admin_name'  =>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		redirect('/htm-admin/', 'refresh');
	
		
	}
	
	
	
}
?>