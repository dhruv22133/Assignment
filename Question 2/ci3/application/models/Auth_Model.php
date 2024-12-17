<?php
class Auth_Model extends CI_MODEL{

    function registration_data($userdata){
        if($this->db->insert("login",$userdata)){
            return true;
        }else{
            return false;
        }
    }
    
    function Mathc_Password($data)
	{
		$query = $this->db->get_where('login', array('user_name' => $data['user_name']));
		return $query->row_array();
		if ($query->num_rows() == 0) {
			return false;
		} else {

			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
			if ((MD5($data['password'])) == $result['password']) {
				return $result ;
			} else {
				return FALSE;
			}
		}
	}

	function post_blogs($data){
		if($this->db->insert("blogs",$data)){
            return true;
        }else{
            return false;
        }
	}

	function fetch(){
		$query = $this->db->query("select * from login");
		return $query->row_array();
	}
}