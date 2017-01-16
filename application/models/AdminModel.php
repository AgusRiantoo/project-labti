<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

	public function create($data){
		$query = $this->db->insert('artikel',$data);
		return $query;
	}

	public function read(){
		$query = $this->db->get('artikel');
		return $query->result();
	}

	public function read_by_id($id){
    	$query = $this->db->get_where('artikel', array('id' => $id));
    	return $query->row_array();
    }

    public function delete($id){
	    return $this->db->delete('artikel', array('id' => $id));
	}

	public function update($id, $data){
		$this->db->where('id',$id);
		$query = $this->db->update('artikel',$data);
		return $query;
	}
}
 ?>