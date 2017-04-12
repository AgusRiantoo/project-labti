<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

	public function create($table,$data){
		$query = $this->db->insert($table,$data);
		return $query;
	}

	public function read($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function read_by_id($id){
    	$query = $this->db->get_where('artikel', array('id' => $id));
    	return $query->row_array();
    }

    public function delete($table,$id){
	    return $this->db->delete($table, array('id' => $id));
	}

	public function update($id, $data){
		$this->db->where('id',$id);
		$query = $this->db->update('artikel',$data);
		return $query;
	}

	public function api(){
		$query = $this->db->get('users')->result;
		return json_encode($query);
	}
}
 ?>