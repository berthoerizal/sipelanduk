<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
         //Do your magic here
         if($this->session->userdata('akses_level')==21){
            $this->load->model('kota_model');
         } else {
             redirect(base_url('error404'));
         }
         
 	}

     public function index()
     {
         $kota=$this->kota_model->listing();
         $valid= $this->form_validation;
         $valid->set_rules('nama_kota', 'Nama Kota', 'required|is_unique[kota.nama_kota]', array(
             'required' => 'Nama Kota harus diisi',
             'is_unique' => 'Kota <strong>'.$this->input->post('nama_kota').'</strong> sudah digunakan'));
 
         if($valid->run() === FALSE) {
             $data = array(
             'title' => 'Kota/Kabupaten',
             'isi' => 'admin/kota/list',
             'kota' => $kota
             );
             $this->load->view('admin/layout/wrapper', $data, FALSE);
         } else {
             $slug_kota = url_title($this->input->post('nama_kota'), 'dash', TRUE);
             $data = array(	
                             'nama_kota' => $this->input->post('nama_kota'), 
                             'slug_kota' => $slug_kota
                             ); 
 
             $this->kota_model->add($data);
             $this->session->set_flashdata('sukses','Kota telah ditambah');
             redirect(base_url('admin/kota'));
         }
     }

     public function edit($id_kota)
     {
         $kota=$this->kota_model->listing($id_kota);
         $this->form_validation->set_rules('nama_kota', 'Nama Kota', 'required', array('required' => 'Nama Kota harus diisi'));
 
         if($this->form_validation->run() === FALSE){
 
             $data = array(
                 'title' 	=> 'Kota/Kabupaten', 
                 'isi' 		=> 'admin/kota/list',
                 'kota'	=> $kota);
             $this->load->view('admin/layout/wrapper', $data);
 
         } else {
            $slug_kota = url_title($this->input->post('nama_kota'), 'dash', TRUE);
            $data = array(	'id_kota' => $id_kota,
                            'nama_kota' => $this->input->post('nama_kota'), 
                            'slug_kota' => $slug_kota
                            );  
 
             $this->kota_model->update($data);
             $this->session->set_flashdata('sukses','Kota telah diedit');
             redirect(base_url('admin/kota'));
         }
     }

    public function hapus($id_kota)
	{
		$kota=$this->kota_model->detail($id_kota);
        $data = array('id_kota' => $kota->id_kota );
        $this->kota_model->delete($data);
        $this->session->set_flashdata('sukses', 'Kota telah dihapus');
        redirect(base_url('admin/kota'));
	}
    
}