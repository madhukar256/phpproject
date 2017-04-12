<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_access extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
        
	function login($username,$password)
    {
	$this->db->where("username",$username);
      $this->db->where("password",$password);
	  $query=$this->db->get("admin");
      if($query->num_rows()>0){
		  foreach($query->result() as $rows)
          {
            $newdata = array(
            'admin_id' 		=> $rows->id,
            'admin_name' 	=> $rows->username,
	         'logged_in' 	=> TRUE,
             );
			}
			$rt =	$this->session->set_userdata($newdata);              
            return true;
	  }else{
		return false;
	  }
	}
	

}


?>