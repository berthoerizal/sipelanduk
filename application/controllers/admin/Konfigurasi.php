<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses_level')==21){
			$this->load->model('konfigurasi_model');
		} else {
			redirect(base_url('error404'));
		}
	}

	public function index()
	{
		$konfigurasi=$this->konfigurasi_model->listing();
		//validasi
		$v=$this->form_validation;
		$v->set_rules('id_konfigurasi','id_konfigurasi','required',array('required' => 'ID Konfigurasi harus diisi'));
		$v->set_rules('namaweb','namaweb','required',array(
			'required' => 'Nama Website harus diisi'));

		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';  //lokasi folder upload
			$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang di-upload
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			
			if(! $this->upload->do_upload('logo')) {
				$data = array(
					'title' 	=> 'Konfigurasi', 
					'konfigurasi' => $konfigurasi,
					'isi' 		=> 'admin/konfigurasi/list',
					'error' 	=>  $this->upload->display_errors());
				$this->load->view('admin/layout/wrapper', $data);

				// Masuk database 
			}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 360; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
				$i = $this->input;
				$data = array(	'id_konfigurasi'	=> $konfigurasi->id_konfigurasi,
								'logo'				=> $upload_data['uploads']['file_name'],
								'namaweb'			=> $i->post('namaweb'),
								'deskripsi'			=> $i->post('deskripsi'),
								'website'			=> $i->post('website'),
								'keywords'			=> $i->post('keywords'),
								'metatext' 			=> $i->post('metatext'),
								'telepon'			=> $i->post('telepon'),
								'email'				=> $i->post('email'),
                                'alamat'            => $i->post('alamat')
								);

				$this->konfigurasi_model->update($data);
				$this->session->set_flashdata('sukses','Konfigurasi berhasil disimpan');
				redirect(base_url('admin/konfigurasi'));
			}
		}
		// End masuk database


		$data = array(
			'title' => 'Konfigurasi',
			'konfigurasi' => $konfigurasi,
			'isi'	=> 'admin/konfigurasi/list' );
		$this->load->view('admin/layout/wrapper', $data);
	}

}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */