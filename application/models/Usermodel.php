<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

	public function read($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function read_by_id($table,$id){
    	$query = $this->db->get_where($table, array('id' => $id));
    	return $query->row_array();
    }

    public function api($email){
    	$this->db->where('email',$email);
		$query = $this->db->get('users')->row();	

		return $query;	
	}
}
 ?>