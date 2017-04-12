<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	  include 'lib.php';
		
	}
	
	/**************admin front page process***********/
	public function login_admin()
	{
		if(isset($_POST['admin-log'])){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			 $query =	$this->admin_access->login($username,$password);
			 if($query){
				redirect('/htm-admin', 'refresh');
			 }else{
				redirect('/htm-admin?err=no', 'refresh');
			 }
		}else{
			redirect('/htm-admin/', 'refresh');
		}
	}
	
}
?>