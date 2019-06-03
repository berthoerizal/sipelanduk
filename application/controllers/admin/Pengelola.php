<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelola extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
         //Do your magic here
         $this->load->model('pengelola_model');
         
 	}

     public function index()
     {
         $user=$this->pengelola_model->listing();
         $valid= $this->form_validation;
         $valid->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', array(
             'required' => 'Username user harus diisi',
             'is_unique' => 'Username <strong>'.$this->input->post('username').'</strong> sudah digunakan',
             'trim' => 'Username tidak boleh ada spasi'));
         $valid->set_rules('password', 'Password', 'required|max_length[12]|min_length[6]', array(
             'required' => 'Password harus diisi',
             'max_lenght' => 'Password maksimal 12 karakter',
             'min_length' => 'Password minimal 6 karakter'));
 
         if($valid->run() === FALSE) {
             $data = array(
             'title' => 'Pengelola',
             'isi' => 'admin/pengelola/list',
             'user' => $user
             );
             $this->load->view('admin/layout/wrapper', $data, FALSE);
         } else {
             $data = array(	
                             'nama' => $this->input->post('username'), 
                             'username' => $this->input->post('username'), 
                              'password' => sha1($this->input->post('password')), 
                             'akses_level' => $this->input->post('akses_level'),
                             'id_kota' => $this->input->post('id_kota')
                             ); 
 
             $this->pengelola_model->add($data);
             $this->session->set_flashdata('sukses','Pengelola telah ditambah');
             redirect(base_url('admin/pengelola'));
         }
     }

    
}