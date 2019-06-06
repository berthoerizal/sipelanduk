<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 	}

	public function index()
	{
        $data = array ('title' => 'Halaman Tidak Ditemukan');
        $this->load->view('error404_view', $data, FALSE);
    }
}