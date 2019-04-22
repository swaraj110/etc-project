<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	
	public function saveUser($username,$password)
	{
			//echo "user name".$username;
		//echo "password".$password;
		//die;
			//$this->db->insert('ciproject_user',$data);
			//$q="insert into ciproject_user values('','".$username."','".$password."')";
			$q="select count(*) as cout from ciproject_user where username = '".$username."' and password =".$password;
			//echo $q;
			//die;
			//$this->db->insert('table_name',$data);
			$ss=$this->db->query($q)->result_array();
			if($ss[0]['cout']>0){
			return true;
			}
			else{
			return false;
			}
			//echo $ss[0]['cout'];
			//print_r($ss);
			//die;	
			//$user_id = $this->db->insert_id();
		
	//return $user_id;
	}

}


?>
