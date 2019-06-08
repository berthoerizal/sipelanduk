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
		// $this->db->select('user.*,kota.*');
		// $this->db->from('user');
		// $this->db->join('kota','kota.id_kota = user.id_kota', 'left');
		// $this->db->order_by('id_user');
		// $query=$this->db->get();
		$query=$this->db->query("select user.*,kota.* from user left join kota on user.id_kota=kota.id_kota where user.username!='masterdata'");
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
		$query=$this->db->query("select user.*,kota.* from user,kota where (user.id_kota=kota.id_kota) && user.username='$username'");
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
		$this->db->where('username', $data['username']);
		$this->db->update('user', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('user', $data);
	}

	public function update_password($username, $data)
	{
		$this->db->where('username', $username);
    	$query = $this->db->update('user', $data);
    	return TRUE;
	}

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */