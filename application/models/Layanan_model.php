<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$query=$this->db->get('layanan');
		return $query->result();
	}

	public function listing1()
	{
		$this->db->select('layanan.*');
		$this->db->from('layanan');
		$this->db->where(array('kategori_layanan' => '1'));
		$this->db->order_by('id_layanan', 'desc');
		$query=$this->db->get();
		return $query->result();
	}

	public function listing2()
	{
		$this->db->select('layanan.*');
		$this->db->from('layanan');
		$this->db->where(array('kategori_layanan' => '2'));
		$this->db->order_by('id_layanan', 'desc');
		$query=$this->db->get();
		return $query->result();
	}

		//show data detail
	public function detail($id_layanan)
	{
		$query=$this->db->get_where('layanan',array('id_layanan'=>$id_layanan));
		return $query->row();
    }

	//tambah data
	public function add($data)
	{
		$this->db->insert('layanan', $data);
	}

	//edit data
	public function update($data)
	{
		$this->db->where('id_layanan', $data['id_layanan']);
		$this->db->update('layanan', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('id_layanan', $data['id_layanan']);
		$this->db->delete('layanan', $data);
	}

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */