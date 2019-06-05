<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
         //Do your magic here
         $this->load->model('layanan_model');
         $this->load->model('angka_model');
         $this->load->model('pengelola_model');
         
 	}

     public function index()
     {
         $layanan=$this->layanan_model->listing();
         $valid= $this->form_validation;
         $valid->set_rules('nama_layanan', 'Nama Layanan', 'required|is_unique[layanan.nama_layanan]', array(
             'required' => 'Nama Layanan harus diisi',
             'is_unique' => 'Layanan <strong>'.$this->input->post('nama_layanan').'</strong> sudah digunakan'));
 
         if($valid->run() === FALSE) {
             $data = array(
             'title' => 'Layanan',
             'isi' => 'admin/layanan/list',
             'layanan' => $layanan
             );
             $this->load->view('admin/layout/wrapper', $data, FALSE);
         } else {
             $slug_layanan = url_title($this->input->post('nama_layanan'), 'dash', TRUE);
             $data = array(	
                             'nama_layanan' => $this->input->post('nama_layanan'), 
                             'kategori_layanan' => $this->input->post('kategori_layanan'),
                             'slug_layanan' => $slug_layanan
                             ); 
 
             $this->layanan_model->add($data);
             $this->session->set_flashdata('sukses','Layanan telah ditambah');
             redirect(base_url('admin/layanan'));
         }
     }

     public function edit($id_layanan)
     {
         $layanan=$this->layanan_model->listing($id_layanan);
         $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', array('required' => 'Nama Layanan harus diisi'));
 
         if($this->form_validation->run() === FALSE){
 
             $data = array(
                 'title' 	=> 'Layanan', 
                 'isi' 		=> 'admin/layanan/list',
                 'layanan'	=> $layanan);
             $this->load->view('admin/layout/wrapper', $data);
 
         } else {
            $slug_layanan = url_title($this->input->post('nama_layanan'), 'dash', TRUE);
            $data = array(	'id_layanan' => $id_layanan,
                            'nama_layanan' => $this->input->post('nama_layanan'), 
                            'kategori_layanan' => $this->input->post('kategori_layanan'),
                            'slug_layanan' => $slug_layanan
                            );  
 
             $this->layanan_model->update($data);
             $this->session->set_flashdata('sukses','Layanan telah diedit');
             redirect(base_url('admin/layanan'));
         }
     }

    public function hapus($id_layanan)
	{
		$layanan=$this->layanan_model->detail($id_layanan);
        $data = array('id_layanan' => $layanan->id_layanan );
        $this->layanan_model->delete($data);
        $this->session->set_flashdata('sukses', 'layanan telah dihapus');
        redirect(base_url('admin/layanan'));
    }
    
    public function input_data()
    {
        $angka=$this->angka_model->listing();
        $id_kota=$this->session->userdata('id_kota');
        $layanan1 = $this->layanan_model->listing1();
        $layanan2 = $this->layanan_model->listing2();
        $angka_layanan1=$this->angka_model->layanan1($id_kota);
        $angka_layanan2=$this->angka_model->layanan2($id_kota);

        $valid= $this->form_validation;
        $valid->set_rules('jumlah_angka', 'Jumlah Angka', 'required', array('required' => 'Jumlah Angka harus diisi'));

        if($valid->run() === FALSE){
            $data = array('title' => 'Input Data Pelayanan',
            'isi' => 'admin/layanan/input_data',
            'layanan1' => $layanan1,
            'layanan2' => $layanan2,
            'angka_layanan1' => $angka_layanan1,
            'angka_layanan2' => $angka_layanan2 );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            // id_layanan, tanggal_angka, id_kota = update id_angka ?
            $tanggal_angka=date("y-m-d",strtotime($this->input->post('tanggal_angka')));
            $data = array(	'id_layanan'		=> $this->input->post('id_layanan'),
                            'id_kota' 		    => $id_kota,
                            'jumlah_angka'		=> $this->input->post('jumlah_angka'),
                            'tanggal_angka'     => $tanggal_angka
                        ); 
            $id_layanan = $this->input->post('id_layanan');
            $id_kota = $this->input->post('id_kota');

            $this->angka_model->add($id_layanan,$id_kota,$tanggal_angka,$data);
            $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
            redirect(base_url('admin/layanan/input_data'));
        }
    }
    
}