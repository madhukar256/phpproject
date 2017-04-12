<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct()
	{
		parent::__construct();
		  include 'lib.php';
		/*$t = time();	
		echo(date("Y-m-d",$t));
		echo(date("g,i,a",$t));*/
	 	
	}
	public function index()
	{
		if($this->session->userdata('user_id') != ''){ 
			$uid = $this->session->userdata('user_id');
			$query =	$this->user->userdata($uid);			
			$data['title']= 'Profile';
			$data['userdata']= $query;
			$this->load->view('header',$data);
			$this->load->view('profile',$data);
			$this->load->view('footer',$data);
		}else{
		  redirect('/', 'refresh');
		}	
	}

	public function edit()
	{
		if(isset($_POST['edit'])){
			$uid = $this->session->userdata('user_id');			
			$oldpassword = md5($_POST['oldpassword']);
			$cpassword = md5($_POST['cpassword']);
			$query = $this->user->updateprofile($uid,$oldpassword,$cpassword);
			 if($query)
			 {
			  redirect('/profile?msg=succ', 'refresh');
			 }else
			 {
			 redirect('/profile?msg=error', 'refresh');
			 }
		}	
	}
	
}
