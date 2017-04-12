<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Functions extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		 $this->load->database();
		 $this->load->library('session');
    }
    
	function login($email,$password)
    {
	$this->db->where("email",$email);
      $this->db->where("password",$password);
	  $query=$this->db->get("tbl_register");
      if($query->num_rows()>0){
		  foreach($query->result() as $rows)
          {
            $newdata = array(
            'user_id' 		=> $rows->Id,
            'user_name' 	=> $rows->username,
		      'user_email'    => $rows->email,
	         'logged_in' 	=> TRUE,
             );
			}
			$rt =	$this->session->set_userdata($newdata);              
            return true;
	  }else{
		return false;
	  }
	}
	
	function registration($username,$email,$password)
    {
	$this->db->where("email",$email);
	  $query=$this->db->get("tbl_register");
      if($query->num_rows()>0){		              
            return false;
	  }else{
		 $data = array(
		 'username' => $username,
		 'email' => $email,
		 'password' => $password);
		 $this->db->insert('tbl_register',$data);
		 return true;
	  }
	}


}


?>