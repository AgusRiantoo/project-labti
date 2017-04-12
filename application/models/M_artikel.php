<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model{

	public function get_data(){
		$query = $this->db->get('artkel',10);
		return $query->result();
	}

	public function read_by_id($id){
    	$query = $this->db->get_where('artkel', array('id' => $id));
    	return $query->row_array();
    }

    public function delete($id){
	    return $this->db->delete('artkel', array('id' => $id));
	}
}
 ?>