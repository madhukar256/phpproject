<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

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
		$data['title']= 'About Us';
		$data['banner']= 'about-us.jpg';
		$data['abs']= 'abs';
		$this->load->view('header',$data);
		$this->load->view('footer',$data);
	}
}

