<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengelola_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$query=$this->db->get('user');
		return $query->result(); 
	}

	public function listing_admin()
	{
		$query=$this->db->query("select * from user where akses_level!=1");
		return $query->result();
	}

	public function listing_pendaftar()
	{
		$query=$this->db->query("select * from user where akses_level=1");
		return $query->result();
	}

		//show data detail
	public function detail($id_user)
	{
		$query=$this->db->get_where('user',array('id_user'=>$id_user));
		return $query->row();
    }
    
    public function detail_profile($username)
	{
		$query=$this->db->get_where('user',array('username'=>$username));
		return $query->row();
	}

	//tambah data
	public function add($data)
	{
		$this->db->insert('user', $data);
	}

	//edit data
	public function update($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('user', $data);
	}

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */