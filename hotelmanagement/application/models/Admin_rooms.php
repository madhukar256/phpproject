<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_rooms extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
        
	function addroom($hname,$price,$type)
    {
		$data = array(
			'hname' => $hname,
			'price' => $price,
			'type' => $type
		);
		$insertquery = $this->db->insert('rooms',$data);
		$insert_id = $this->db->insert_id();		
		if($insertquery){
			return $insert_id;
		}
		else
		{
			return false;
		}  		
	}
	
		public function room_logo($data,$id){
		$this->db->where('id',$id );
		$up = $this->db->update('rooms', $data);	
		if($up){
			return true;
		}
		else
		{
			return false;	
		}
	}
	
	

	public function roombyid($id){
		$this->db->where("id",$id);
		$query = $this->db->get('rooms');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
	
	public function editroom($hname,$price,$type,$id){
		$this->db->where('id',$id);
		$data = array(
			'hname' => $hname,
			'price' => $price,
			'type' => $type
			);
		$up = $this->db->update('rooms', $data);	
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
		$delquery = $this->db->delete('rooms');
		if($delquery){
			return true;
		}else{
			return false;
		}
	}
	/*******End function********/
	
		public function allrooms2(){
		$query = $this->db->get('rooms');
		if($query->result()){
			return count($query->result());
		}else{		
			return false;
		}
	}
	
	public function allrooms($limit,$start){
	$this->db->limit($limit, $start);
		$query = $this->db->get('rooms');
		if($query->result()){
			return $query->result();
		}else{		
			return false;
		}
	}
}


?>