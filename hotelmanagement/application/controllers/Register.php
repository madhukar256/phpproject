<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		if($this->session->userdata('user_id') == ''){ 
			$data['title']= 'Registration';
			$this->load->view('header',$data);
			$this->load->view('register',$data);
			$this->load->view('footer',$data);
		}else{
		  redirect('/', 'refresh');
		}
	}
	
	public function login()
	{
		if(isset($_POST['Btn_Submit'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		 $query =	$this->functions->login($email,$password);
		 if($query)
		 {
		  redirect('/', 'refresh');
		 }else
		 {
		 redirect('/home?msg=error', 'refresh');
		 }
		}
	}
	public function registration()
	{
		if(isset($_POST['Register'])){
		$username = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		 $query =	$this->functions->registration($username,$email,$password);
		 if($query)
		 {
		  redirect('/register?succ=dn', 'refresh');
		 }else
		 {
			redirect('/register?err=al', 'refresh');
		 } 
		}
	}
	
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}
