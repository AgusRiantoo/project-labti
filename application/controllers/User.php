<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_login');
		$this->load->library('form_validation');

	}

	  function index(){
	    if ($this->session->userdata('Login')) {
	      redirect();
	    } else {
	      $this->form_validation->set_rules('username', 'Username', 'required');
	      $this->form_validation->set_rules('password', 'Password', 'required');

	      if($this->form_validation->run() === FALSE){
	        $this->load->view('login' , array('error' => null));
	      } else {
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');
	        $user = $this->M_login->cek($username, $password);
	        if ($password == $user['password']) {
	          $this->session->set_userdata(array(
	              'Login' => true,
	              'username' => $username,
	            ));
	          redirect();
	        } else {
	          $error = array('error' => 'Username / Password salah');
	          $this->load->view('login', $error);
	        }
	      }
	    }
	  }

	public function logout(){
	    $this->session->sess_destroy();
	    redirect('user');
	}
}
