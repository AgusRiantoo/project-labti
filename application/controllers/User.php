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
	      redirect('admin');
	    }else{
		    $this->load->view('login' , array('error' => null));	    	
	    }
	  }

	public function login(){
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->M_login->cek($email, sha1($password));

        if (sha1($password) === $user['password']) {
          $this->session->set_userdata(array(
              'Login' => true,
              'user_id' => $user['id'],
            ));
        redirect('admin');
      	}else {
          $error = array('error' => 'Username / Password salah');
          $this->load->view('login', $error);
        }
	}

	public function logout(){
	    $this->session->sess_destroy();
	    redirect();
	}

}
