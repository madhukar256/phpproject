<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {

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
	
	public function get()
	{
	
		$config = array();
	  	$config["base_url"]  = base_url().'rooms/get';
		$config["total_rows"]  = $this->room->allrooms2();
		$config["per_page"] = 12;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$allrooms = $this->room->allrooms($config["per_page"], $page);
	   $data["links"] = $this->pagination->create_links(); 
			if($allrooms){
			$data['all_list']= $allrooms;
			}else{
			$data['all_list']= "";
			}
		$data['title']= 'Rooms';
		$data['banner']= 'ROOM_P.jpg';
		$this->load->view('header',$data);
		$this->load->view('rooms',$data);
		$this->load->view('footer',$data);
	}
}
