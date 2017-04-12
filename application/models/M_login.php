<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public function cek($email, $password){
		$array = array('email' => $email, 'password' => $password);
		$this->db->where($array);	
		$query = $this->db->get('users');
		return $query->row_array();
	}

}
 ?>