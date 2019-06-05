<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		 $this->load->model('layanan_model');
		 $this->load->model('angka_model');
 	}

	public function index()
	{
		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'admin/home/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}