<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Room extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
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
	public function allrooms2(){
		$query = $this->db->get('rooms');
		if($query->result()){
			return count($query->result());
		}else{		
			return false;
		}
	}

}


?>