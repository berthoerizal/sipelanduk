<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angka_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// public function listing()
	// {
	// 	$this->db->select('angka.*, layanan.*, kota.*');
	// 	$this->db->from('angka');
	// 	//relasi database
	// 	$this->db->join('layanan', 'layanan.id_layanan = angka.id_layanan', 'left');
	// 	$this->db->join('kota', 'kota.id_kota = angka.id_kota', 'left');
	// 	//end relasi database
	// 	$this->db->order_by('id_angka', 'desc');
	// 	$query=$this->db->get();
	// 	return $query->result();
    // }
    
    public function listing($data)
	{
        // $query=$this->db->query("select dokumen.*,user.nama,kategori_dokumen.* from dokumen,user,kategori_dokumen where (dokumen.username=user.username && dokumen.id_kategori_dokumen=kategori_dokumen.id_kategori_dokumen) && dokumen.username='$data' order by dokumen.id_dokumen desc");
        $query = $this->db->query("select angka.*, layanan.*, kota.* from angka,layanan,kota where (angka.id_layanan=layanan.id_layanan) && (angka.id_kota=kota.id_kota) && (angka.id_kota='$data')");
		return $query->result();
	}

		//show data detail
	public function detail($id_angka)
	{
		$query=$this->db->get_where('angka',array('id_angka'=>$id_angka));
		return $query->row();
    }

	//tambah data
	public function add($data)
	{
		$this->db->insert('angka', $data);
	}

	//edit data
	public function update($data)
	{
		$this->db->where('id_angka', $data['id_angka']);
		$this->db->update('angka', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('id_angka', $data['id_angka']);
		$this->db->delete('angka', $data);
	}

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */