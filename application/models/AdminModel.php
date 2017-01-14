<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

	public function create(){
		$judul	= $this->input->post('judul');
		$isi	= $this->input->post('isi');
		$gambar = $this->input->post('gambar');
		
		$data = array(
			'judul' => $judul,
			'isi'	=> $isi,
			'gambar'=> 'test.jpg'
			);

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
}
 ?>