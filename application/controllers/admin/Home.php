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
		$tanggal_hari_ini=date("y-m-d");
		$pelayanan=$this->angka_model->listing_hari_ini_1($tanggal_hari_ini);
		$pelayanan_all=$this->layanan_model->listing1();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'admin/home/list', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENDAFTARAN PENDUDUK - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU HARI INI');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	
	public function pencatatan_sipil()
	{
		$tanggal_hari_ini=date("y-m-d");
		$pelayanan=$this->angka_model->listing_hari_ini_2($tanggal_hari_ini);
		$pelayanan_all=$this->layanan_model->listing2();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'admin/home/pencatatan_sipil', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENCATATAN SIPIL - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU HARI INI');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function pendaftaran_penduduk($id_layanan)
	{
		$id_layanan=$this->encrypt->decode($id_layanan);
		$tanggal_hari_ini=date("y-m-d");
		$detail_pelayanan=$this->angka_model->detail_pelayanan($id_layanan);
		$pelayanan_hari_ini=$this->angka_model->hari_ini($tanggal_hari_ini, $id_layanan);
		$pelayanan_bulan_ini=$this->angka_model->bulan_ini($id_layanan);
		$pelayanan_tahun_ini=$this->angka_model->tahun_ini($id_layanan);
		$pelayanan_keseluruhan=$this->angka_model->keseluruhan($id_layanan);
		
		$data = array ('title' => $detail_pelayanan->nama_layanan, 
										'isi' => 'admin/home/detail_pelayanan', 
										
										'pelayanan_hari_ini' => $pelayanan_hari_ini,
										'pelayanan_bulan_ini' => $pelayanan_bulan_ini,
										'pelayanan_tahun_ini' => $pelayanan_tahun_ini,
										'pelayanan_keseluruhan' => $pelayanan_keseluruhan);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}


}