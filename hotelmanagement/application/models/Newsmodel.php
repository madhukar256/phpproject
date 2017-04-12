<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newsmodel extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
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

}


?>