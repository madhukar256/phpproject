<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_restaurant extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
        
	function add($hname)
    {
		$data = array(
			'rname' => $hname
		);
		$insertquery = $this->db->insert('restaurant',$data);
		$insert_id = $this->db->insert_id();		
		if($insertquery){
			return $insert_id;
		}
		else
		{
			return false;
		}  		
	}
	
		public function logo($data,$id){
		$this->db->where('id',$id );
		$up = $this->db->update('restaurant', $data);	
		if($up){
			return true;
		}
		else
		{
			return false;	
		}
	}
	
	

	public function byid($id){
		$this->db->where("id",$id);
		$query = $this->db->get('restaurant');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
	
	public function editroom($hname,$id){
		$this->db->where('id',$id);
		$data = array(
			'rname' => $hname,
			);
		$up = $this->db->update('restaurant', $data);	
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
		$delquery = $this->db->delete('restaurant');
		if($delquery){
			return true;
		}else{
			return false;
		}
	}
	/*******End function********/
	
		public function all2(){
		$query = $this->db->get('restaurant');
		if($query->result()){
			return count($query->result());
		}else{		
			return false;
		}
	}
	
	public function all($limit,$start){
	$this->db->limit($limit, $start);
		$query = $this->db->get('restaurant');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
}


?>