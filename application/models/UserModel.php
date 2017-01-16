<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

	public function read(){
		$query = $this->db->get('artikel');
		return $query->result();
	}

	public function read_by_id($id){
    	$query = $this->db->get_where('artikel', array('id' => $id));
    	return $query->row_array();
    }
}
 ?>