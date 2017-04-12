<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	  include 'lib.php';
		
	}
	
	/**************admin front page process***********/
	public function index()
	{
		if($this->session->userdata('admin_id') == ''){
		redirect('/htm-admin/', 'refresh');
		}
		else
		{			
			$data['title']= 'News';
			$data['p']= 'news';
			$data['content']= $this->admin_news->content();
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/news.php", $data);
			$this->load->view("admin/footer.php", $data);
		}
	}


	public function add()
	{
		if(isset($_POST['submit-news'])){
				$brand_id = $this->admin_news->add($_POST['hname']);
				redirect('/htm-admin/news/', 'refresh');
				}
		} 
	
	
	public function edit($id){
			$data['title']= 'Edit Bar';
			$data['p']= 'bar';
			$room = $this->admin_bar->byid($id);			
			$data['room']=$room; 
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/bar-edit.php", $data);
			$this->load->view("admin/footer.php", $data);
	}
	
	public function editmake(){
		if(isset($_POST['id'])){
			$hname = $_POST['hname'];
			$room = $this->admin_bar->editroom($hname,$_POST['id']);
			  if($room){								
				redirect('/htm-admin/bar/all', 'refresh');
			} 
		}
	}
	
		public function delete($id){
		  $del = $this->admin_bar->del($id);
		  if($del){
			 $dir_path =  "admin/".$this->session->userdata('admin_id')."/bar/".$id;
			$path = 'upload/'.$dir_path."/featured";
			$pathud = 'upload/'.$dir_path;
			$p = array_map('unlink', glob($path."/*"));
			if (is_dir($path)){
			  if(rmdir($path))
			  {
				if (is_dir($pathud)){
				  if(rmdir($pathud))
				  {
					redirect('/htm-admin/bar/all/');
				  }
				}
			  }
			}		
			else
			{
				redirect('/htm-admin/rooms/all/','refresh');
			} 	
		}
		else
		{
				redirect('/htm-admin/rooms/all/','refresh');
		} 
		
	}
	
}
?>