<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelola extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
         //Do your magic here
         $this->load->model('pengelola_model');
         $this->load->model('kota_model');
 	}

     public function index()
     {
         $user=$this->pengelola_model->listing();
         $kota=$this->kota_model->listing();
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
             'user' => $user,
             'kota'=> $kota
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

     public function detail($username)
     {
        $user=$this->pengelola_model->detail_profile($username);
        $kota=$this->kota_model->listing();
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama harus diisi'));
 
         if($this->form_validation->run() === FALSE){
 
             $data = array(
                 'title' 	=> 'Profile', 
                 'isi' 		=> 'admin/pengelola/detail',
                 'user'	=> $user,
                'kota' => $kota);
             $this->load->view('admin/layout/wrapper', $data);
 
         } else {
            $data = array(	'username'=> $username,
                            'nama'    => $this->input->post('nama'), 
                            'id_kota' => $this->input->post('id_kota'),
                            'email'   => $this->input->post('email'),
                            'nomor_telepon' => $this->input->post('nomor_telepon'),
                            'akses_level' => $this->input->post('akses_level')
                            );  
 
             $this->pengelola_model->update($data);
             $this->session->set_flashdata('sukses','Pengelola telah diedit');
             redirect(base_url('admin/pengelola/detail/'.$user->username));
         }

         $data = array(
            'title' 	=> 'Profile', 
            'isi' 		=> 'admin/pengelola/detail',
            'user'	=> $user,
           'kota' => $kota);
        $this->load->view('admin/layout/wrapper', $data);
        
     }

     public function hapus($id_user)
	{
		$user=$this->pengelola_model->detail($id_user);
        $data = array('id_user' => $user->id_user );
        $this->pengelola_model->delete($data);
        $this->session->set_flashdata('sukses', 'Pengelola telah dihapus');
        redirect(base_url('admin/pengelola'));
	}

    
}