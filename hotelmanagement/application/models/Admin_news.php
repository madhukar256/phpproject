<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_news extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
        
	function add($hname)
    {
		$this->db->where('id',"1");
		$data = array(
			'content' => $hname,
			);
		$up = $this->db->update('news', $data);	
		if($up){
			return true;
		}
		else
		{
			return false;	
		} 		
	}
	
	
	

	public function content(){
		$this->db->where("id",1);
		$query = $this->db->get('news');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
	
	public function editroom($hname,$id){
		$this->db->where('id',$id);
		$data = array(
			'bname' => $hname,
			);
		$up = $this->db->update('bar', $data);	
		if($up){
			return true;
		}
		else
		{
			return false;	
		}
	}
	
	
		
	/************** delete Banner function*****************/
	public function del($id){
		$this->db->where('id',$id );
		$delquery = $this->db->delete('bar');
		if($delquery){
			return true;
		}else{
			return false;
		}
	}
	/*******End function********/
	
		public function all2(){
		$query = $this->db->get('bar');
		if($query->result()){
			return count($query->result());
		}else{		
			return false;
		}
	}
	
	public function all($limit,$start){
	$this->db->limit($limit, $start);
		$query = $this->db->get('bar');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
}


?>