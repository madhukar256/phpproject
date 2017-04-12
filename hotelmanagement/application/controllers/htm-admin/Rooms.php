<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	  include 'lib.php';
		
	}
	
	/**************admin front page process***********/
	public function all()
	{
		if($this->session->userdata('admin_id') == ''){
		redirect('/htm-admin/', 'refresh');
		}
		else
		{
			$config = array();
			$config["base_url"]  = base_url().'htm-admin/rooms/all';
			$config["total_rows"]  = $this->admin_rooms->allrooms2();
			$config["per_page"] = 12;
			$config["uri_segment"] = 4;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			$allrooms = $this->admin_rooms->allrooms($config["per_page"], $page);
		   $data["links"] = $this->pagination->create_links(); 
			if($allrooms){
			$data['all_list']= $allrooms;
			}else{
			$data['all_list']= "";
			}
			$data['title']= 'ROOMS';
			$data['p']= 'rooms';
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/rooms.php", $data);
			$this->load->view("admin/footer.php", $data);
		}
	}

	/**************Rooms new page process***********/
	public function newadd()
	{
		if($this->session->userdata('admin_id') == ''){
		redirect('/htm-admin/', 'refresh');
		}
		else
		{
			
			$data['title']= 'ROOMS';
			$data['p']= 'rooms';
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/rooms-new.php", $data);
			$this->load->view("admin/footer.php", $data);
		}
	}	
	
	public function add()
	{
		if(isset($_POST['submit-room'])){
				$brand_id = $this->admin_rooms->addroom($_POST['hname'],$_POST['price'],$_POST['type']);
				$dir_path =  "admin/".$this->session->userdata('admin_id')."/rooms/".$brand_id;
					if (!is_dir('upload')) {
					mkdir('./upload', 0777, true);
				}
				if (!is_dir('upload/'.$dir_path."/featured")) {
					mkdir('./upload/'.$dir_path."/featured", 0777, true);
					$check = "true";
					$path = 'upload/'.$dir_path."/featured";
				}
				$path = 'upload/'.$dir_path."/featured";
				if (is_dir($path)) {
					$path = 'upload/'.$dir_path."/featured/";
					$p = array_map('unlink', glob($path."/*"));
					$target_dir = $path;
					$target_file = $target_dir . basename($_FILES["userfile"]["name"]);		
					if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
						$image_url_up = base_url().$path."". basename( $_FILES["userfile"]["name"]);						
					}
					$data2 = array(
					'img_path' => $image_url_up
					); 
					$up = $this->admin_rooms->room_logo($data2,$brand_id);
					 if($up){								
						redirect('/htm-admin/rooms/all', 'refresh');
					}
				}
		} 
	}
	
	public function edit($id){
			$data['title']= 'Edit Room';
			$data['p']= 'rooms';
			$room = $this->admin_rooms->roombyid($id);			
			$data['room']=$room; 
			$data['controller']=$this; 
			$this->load->view("admin/header.php", $data);
			$this->load->view("admin/rooms-edit.php", $data);
			$this->load->view("admin/footer.php", $data);
	}
	
	public function editmake(){
		if(isset($_POST['room_id'])){
			$hname = $_POST['hname'];
			$price = $_POST['price'];
			$type = $_POST['type'];
			$id = $_POST['room_id'];
			$room = $this->admin_rooms->editroom($hname,$price,$type,$id);
			 if($room){								
				redirect('/htm-admin/rooms/all', 'refresh');
			}	
		}
	}
	
		public function delete($id){
		  $del = $this->admin_rooms->del($id);
		  if($del){
			 $dir_path =  "admin/".$this->session->userdata('admin_id')."/featured/".$id;
			$path = 'upload/'.$dir_path."/featured";
			$pathud = 'upload/'.$dir_path;
			$p = array_map('unlink', glob($path."/*"));
			if (is_dir($path)){
			  if(rmdir($path))
			  {
				if (is_dir($pathud)){
				  if(rmdir($pathud))
				  {
					redirect('/htm-admin/rooms/all/');
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