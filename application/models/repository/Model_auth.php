<?php 

class Model_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* 
		This function checks if the email exists in the database
	*/
		//QUang
	public function check_email($email) 
	{
		if($email) {
			$sql = 'SELECT * FROM users WHERE email = ?';
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
		}

		return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
		//Quang
	// public function login($email, $password) {
	// 	if($email && $password) {
	// 		$sql = "SELECT * FROM users WHERE email = ?";
	// 		$query = $this->db->query($sql, array($email));

	// 		if($query->num_rows() == 1) {
	// 			$result = $query->row_array();

	// 			$hash_password = password_verify($password, $result['password']);
	// 			if($hash_password === true) {
	// 				return $result;	
	// 			}
	// 			else {
	// 				return false;
	// 			}

				
	// 		}
	// 		else {
	// 			return false;
	// 		}
	// 	}
	// }

	//Viet
	public function login($a_UserInfo) {
		$this->db->select('*');
		$this->db->where('email', $a_UserInfo['email']);
		$this->db->where('password', md5($a_UserInfo['pass']));

		$dulieu = $this->db->get('users');

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		// var_dump($dulieu);

		if(count($dulieu) >0){
    			return $dulieu;
	    	} 
	    	else {
	    		return false;
	    	}
	}
}