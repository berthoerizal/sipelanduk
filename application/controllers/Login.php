<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$valid=$this->form_validation;
		$valid->set_rules('username','Username','required',array('required' => 'Username harus diisi'));
		$valid->set_rules('password', 'Password', 'required|max_length[12]|min_length[6]', array('required' => 'Password harus diisi','max_lenght' => 'Password maksimal 12 karakter','min_length' => 'Password minimal 6 karakter'));

		$username=$this->input->post('username');
		$password=$this->input->post('password');

		if($valid->run())
		{
			$this->simple_login->login($username,$password, base_url('admin/home'),base_url('login'));
		}

		$data = array('title' => 'Login', );
		$this->load->view('login_view', $data);
	}

	public function logout()
	{
		$this->simple_login->logout();
    }
}