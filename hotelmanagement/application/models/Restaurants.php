<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Restaurants extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
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
	public function all2(){
		$query = $this->db->get('restaurant');
		if($query->result()){
			return count($query->result());
		}else{		
			return false;
		}
	}

}


?>