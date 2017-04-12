<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
    
	function userdata($uid)
    {
	 $this->db->where("Id",$uid);
	  $query=$this->db->get("tbl_register");
      if($query->num_rows()>0){	 
            return $query->result();
	  }else{
		return false;
	  } 
	}
	
	function updateprofile($uid,$oldpassword,$cpassword)
    {
	 $this->db->where("Id",$uid);
	 $this->db->where("password",$oldpassword);
	  $query=$this->db->get("tbl_register");
      if($query->num_rows()>0){	 
           $data1 = array(
			'password' => $cpassword
			);
		$this->db->where('Id',$uid);	
		$up = $this->db->update('tbl_register', $data1);	
		if($up){
			return true;
		}	
	  }else{		
		return false;
	  } 
	}
	

}


?>