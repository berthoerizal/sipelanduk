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
		$last_update=$this->angka_model->last_update();
		$tanggal_hari_ini=date("y-m-d");
		$pelayanan=$this->angka_model->listing_hari_ini_1($tanggal_hari_ini);
		$pelayanan_all=$this->layanan_model->listing1();
		
		$kedatangan_anggota=$this->angka_model->listing_hari_ini_kedatangan_anggota_1($tanggal_hari_ini);
		$perpindahan_anggota=$this->angka_model->listing_hari_ini_perpindahan_anggota_1($tanggal_hari_ini);

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/list', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENDAFTARAN PENDUDUK - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update, 'kedatangan_anggota' => $kedatangan_anggota, 'perpindahan_anggota' => $perpindahan_anggota);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function bulan()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_bulan_ini_1();
		$pelayanan_all=$this->layanan_model->listing1();

		$kedatangan_anggota=$this->angka_model->listing_bulan_ini_kedatangan_anggota_1();
		$perpindahan_anggota=$this->angka_model->listing_bulan_ini_perpindahan_anggota_1();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/bulan', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENDAFTARAN PENDUDUK - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update, 'kedatangan_anggota' => $kedatangan_anggota, 'perpindahan_anggota' => $perpindahan_anggota);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function tahun()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_tahun_ini_1();
		$pelayanan_all=$this->layanan_model->listing1();

		$kedatangan_anggota=$this->angka_model->listing_tahun_ini_kedatangan_anggota_1();
		$perpindahan_anggota=$this->angka_model->listing_tahun_ini_perpindahan_anggota_1();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/tahun', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENDAFTARAN PENDUDUK - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update, 'kedatangan_anggota' => $kedatangan_anggota, 'perpindahan_anggota' => $perpindahan_anggota);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function keseluruhan()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_keseluruhan_1();
		$pelayanan_all=$this->layanan_model->listing1();

		$kedatangan_anggota=$this->angka_model->listing_keseluruhan_kedatangan_anggota_1();
		$perpindahan_anggota=$this->angka_model->listing_keseluruhan_perpindahan_anggota_1();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/keseluruhan', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENDAFTARAN PENDUDUK - TOTAL PELAYANAN PROVINSI KEPULAUAN', 'last_update' => $last_update, 'kedatangan_anggota' => $kedatangan_anggota, 'perpindahan_anggota' => $perpindahan_anggota);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	
	public function pencatatan_sipil()
	{
		$last_update=$this->angka_model->last_update();
		$tanggal_hari_ini=date("y-m-d");
		$pelayanan=$this->angka_model->listing_hari_ini_2($tanggal_hari_ini);
		$pelayanan_all=$this->layanan_model->listing2();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/pencatatan_sipil', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENCATATAN SIPIL - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pencatatan_sipil_bulan()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_bulan_ini_2();
		$pelayanan_all=$this->layanan_model->listing2();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/pencatatan_sipil_bulan', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENCATATAN SIPIL - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pencatatan_sipil_tahun()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_tahun_ini_2();
		$pelayanan_all=$this->layanan_model->listing2();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/pencatatan_sipil_tahun', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENCATATAN SIPIL - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pencatatan_sipil_keseluruhan()
	{
		$last_update=$this->angka_model->last_update();
		$pelayanan=$this->angka_model->listing_keseluruhan_2();
		$pelayanan_all=$this->layanan_model->listing2();

		$data = array('title' => 'Provinsi Kepulauan Riau', 'isi' => 'home/pencatatan_sipil_keseluruhan', 'pelayanan' => $pelayanan, 'pelayanan_all' => $pelayanan_all, 'sub_pelayanan' => 'PENCATATAN SIPIL - TOTAL PELAYANAN PROVINSI KEPULAUAN RIAU', 'last_update' => $last_update);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pendaftaran_penduduk($id_layanan)
	{
		$last_update=$this->angka_model->last_update();
		$id_layanan=$this->encrypt->decode($id_layanan);
		$tanggal_hari_ini=date("y-m-d");
		$detail_pelayanan=$this->angka_model->detail_pelayanan($id_layanan);
		$pelayanan_hari_ini=$this->angka_model->hari_ini($tanggal_hari_ini, $id_layanan);
		$pelayanan_bulan_ini=$this->angka_model->bulan_ini($id_layanan);
		$pelayanan_tahun_ini=$this->angka_model->tahun_ini($id_layanan);
		$pelayanan_keseluruhan=$this->angka_model->keseluruhan($id_layanan);

		$count_hari_ini=$this->angka_model->total_hari_ini($tanggal_hari_ini, $id_layanan);
		$count_bulan_ini=$this->angka_model->total_bulan_ini($id_layanan);
		$count_tahun_ini=$this->angka_model->total_tahun_ini($id_layanan);
		$count_keseluruhan=$this->angka_model->total_keseluruhan($id_layanan);

		$data = array ('title' => $detail_pelayanan->nama_layanan, 
										'isi' => 'home/detail_pelayanan', 
										'pelayanan_hari_ini' => $pelayanan_hari_ini,
										'pelayanan_bulan_ini' => $pelayanan_bulan_ini,
										'pelayanan_tahun_ini' => $pelayanan_tahun_ini,
										'pelayanan_keseluruhan' => $pelayanan_keseluruhan,
										'last_update' => $last_update,
										'count_hari_ini' => $count_hari_ini,
										'count_bulan_ini' => $count_bulan_ini,
										'count_tahun_ini' => $count_tahun_ini,
										'count_keseluruhan' => $count_keseluruhan);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pendaftaran_penduduk_kedatangan_anggota($id_layanan)
	{
		$last_update=$this->angka_model->last_update();
		$id_layanan=$this->encrypt->decode($id_layanan);
		$id_anggota=25; //kedatangan berdasarkan anggota
		$tanggal_hari_ini=date("y-m-d");
		$detail_pelayanan=$this->angka_model->detail_pelayanan($id_layanan);

		$pelayanan_hari_ini=$this->angka_model->hari_ini($tanggal_hari_ini, $id_layanan);
		$pelayanan_bulan_ini=$this->angka_model->bulan_ini($id_layanan);
		$pelayanan_tahun_ini=$this->angka_model->tahun_ini($id_layanan);
		$pelayanan_keseluruhan=$this->angka_model->keseluruhan($id_layanan);
		$count_hari_ini=$this->angka_model->total_hari_ini($tanggal_hari_ini, $id_layanan);
		$count_bulan_ini=$this->angka_model->total_bulan_ini($id_layanan);
		$count_tahun_ini=$this->angka_model->total_tahun_ini($id_layanan);
		$count_keseluruhan=$this->angka_model->total_keseluruhan($id_layanan);

		$anggota_hari_ini=$this->angka_model->anggota_hari_ini($tanggal_hari_ini, $id_anggota);
		$anggota_bulan_ini=$this->angka_model->anggota_bulan_ini($id_anggota);
		$anggota_tahun_ini=$this->angka_model->anggota_tahun_ini($id_anggota);
		$anggota_keseluruhan=$this->angka_model->anggota_keseluruhan($id_anggota);
		$count_anggota_hari_ini=$this->angka_model->total_anggota_hari_ini($tanggal_hari_ini, $id_anggota);
		$count_anggota_bulan_ini=$this->angka_model->total_anggota_bulan_ini($id_anggota);
		$count_anggota_tahun_ini=$this->angka_model->total_anggota_tahun_ini($id_anggota);
		$count_anggota_keseluruhan=$this->angka_model->total_anggota_keseluruhan($id_anggota);

		$data = array ('title' => $detail_pelayanan->nama_layanan, 
										'isi' => 'home/detail_pelayanan_anggota', 
										'pelayanan_hari_ini' => $pelayanan_hari_ini,
										'pelayanan_bulan_ini' => $pelayanan_bulan_ini,
										'pelayanan_tahun_ini' => $pelayanan_tahun_ini,
										'pelayanan_keseluruhan' => $pelayanan_keseluruhan,
										'last_update' => $last_update,
										'count_hari_ini' => $count_hari_ini,
										'count_bulan_ini' => $count_bulan_ini,
										'count_tahun_ini' => $count_tahun_ini,
										'count_keseluruhan' => $count_keseluruhan,
									
										'anggota_hari_ini' => $anggota_hari_ini,
										'anggota_bulan_ini' => $anggota_bulan_ini,
										'anggota_tahun_ini' => $anggota_tahun_ini,
										'anggota_keseluruhan' => $anggota_keseluruhan,
										'count_anggota_hari_ini' => $count_anggota_hari_ini,
										'count_anggota_bulan_ini' => $count_anggota_bulan_ini,
										'count_anggota_tahun_ini' => $count_anggota_tahun_ini,
										'count_anggota_keseluruhan' => $count_anggota_keseluruhan);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pendaftaran_penduduk_perpindahan_anggota($id_layanan)
	{
		$last_update=$this->angka_model->last_update();
		$id_layanan=$this->encrypt->decode($id_layanan);
		$id_anggota=26; //perpindahan berdasarkan anggota
		$tanggal_hari_ini=date("y-m-d");
		$detail_pelayanan=$this->angka_model->detail_pelayanan($id_layanan);

		$pelayanan_hari_ini=$this->angka_model->hari_ini($tanggal_hari_ini, $id_layanan);
		$pelayanan_bulan_ini=$this->angka_model->bulan_ini($id_layanan);
		$pelayanan_tahun_ini=$this->angka_model->tahun_ini($id_layanan);
		$pelayanan_keseluruhan=$this->angka_model->keseluruhan($id_layanan);
		$count_hari_ini=$this->angka_model->total_hari_ini($tanggal_hari_ini, $id_layanan);
		$count_bulan_ini=$this->angka_model->total_bulan_ini($id_layanan);
		$count_tahun_ini=$this->angka_model->total_tahun_ini($id_layanan);
		$count_keseluruhan=$this->angka_model->total_keseluruhan($id_layanan);

		$anggota_hari_ini=$this->angka_model->anggota_hari_ini($tanggal_hari_ini, $id_anggota);
		$anggota_bulan_ini=$this->angka_model->anggota_bulan_ini($id_anggota);
		$anggota_tahun_ini=$this->angka_model->anggota_tahun_ini($id_anggota);
		$anggota_keseluruhan=$this->angka_model->anggota_keseluruhan($id_anggota);
		$count_anggota_hari_ini=$this->angka_model->total_anggota_hari_ini($tanggal_hari_ini, $id_anggota);
		$count_anggota_bulan_ini=$this->angka_model->total_anggota_bulan_ini($id_anggota);
		$count_anggota_tahun_ini=$this->angka_model->total_anggota_tahun_ini($id_anggota);
		$count_anggota_keseluruhan=$this->angka_model->total_anggota_keseluruhan($id_anggota);

		$data = array ('title' => $detail_pelayanan->nama_layanan, 
										'isi' => 'home/detail_pelayanan_anggota', 
										'pelayanan_hari_ini' => $pelayanan_hari_ini,
										'pelayanan_bulan_ini' => $pelayanan_bulan_ini,
										'pelayanan_tahun_ini' => $pelayanan_tahun_ini,
										'pelayanan_keseluruhan' => $pelayanan_keseluruhan,
										'last_update' => $last_update,
										'count_hari_ini' => $count_hari_ini,
										'count_bulan_ini' => $count_bulan_ini,
										'count_tahun_ini' => $count_tahun_ini,
										'count_keseluruhan' => $count_keseluruhan,
									
										'anggota_hari_ini' => $anggota_hari_ini,
										'anggota_bulan_ini' => $anggota_bulan_ini,
										'anggota_tahun_ini' => $anggota_tahun_ini,
										'anggota_keseluruhan' => $anggota_keseluruhan,
										'count_anggota_hari_ini' => $count_anggota_hari_ini,
										'count_anggota_bulan_ini' => $count_anggota_bulan_ini,
										'count_anggota_tahun_ini' => $count_anggota_tahun_ini,
										'count_anggota_keseluruhan' => $count_anggota_keseluruhan);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}