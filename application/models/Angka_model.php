<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angka_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    
    public function listing()
	{
        $query=$this->db->get('angka');
		return $query->result();
	}

	public function detail_pelayanan($id_layanan)
	{
		$query=$this->db->query("select nama_layanan from layanan where id_layanan='$id_layanan'");
		return $query->row();
	}

	public function listing_hari_ini_1($tanggal_hari_ini)
	{
		$query=$this->db->query("select layanan.nama_layanan as nama_layanan, layanan.id_layanan as id_layanan, sum(angka.jumlah_angka) as jumlah_angka from layanan left join angka on layanan.id_layanan=angka.id_layanan && angka.tanggal_angka='$tanggal_hari_ini' where kategori_layanan='1' group by layanan.id_layanan order by jumlah_angka desc");
		return $query->result();
	}

	public function listing_hari_ini_2($tanggal_hari_ini)
	{
		$query=$this->db->query("select layanan.nama_layanan as nama_layanan, layanan.id_layanan as id_layanan, sum(angka.jumlah_angka) as jumlah_angka from layanan left join angka on layanan.id_layanan=angka.id_layanan && angka.tanggal_angka='$tanggal_hari_ini' where kategori_layanan='2' group by layanan.id_layanan order by jumlah_angka desc");
		return $query->result();
	}

	public function hari_ini($tanggal_hari_ini,$id_layanan)
	{
		$query=$this->db->query("select kota.nama_kota as nama_kota, sum(angka.jumlah_angka) as jumlah_angka from kota left join angka on kota.id_kota=angka.id_kota && angka.tanggal_angka='$tanggal_hari_ini' && angka.id_layanan='$id_layanan' group by kota.id_kota order by jumlah_angka desc");
		return $query->result();
	}

	public function bulan_ini($id_layanan)
	{
		$query=$this->db->query("select kota.nama_kota as nama_kota, sum(angka.jumlah_angka) as jumlah_angka from kota left join angka on kota.id_kota=angka.id_kota && angka.id_layanan='$id_layanan' && month(current_date()) group by kota.id_kota order by jumlah_angka desc");
		return $query->result();
	}

	public function tahun_ini($id_layanan)
	{
		$query=$this->db->query("select kota.nama_kota as nama_kota, sum(angka.jumlah_angka) as jumlah_angka from kota left join angka on kota.id_kota=angka.id_kota && angka.id_layanan='$id_layanan' && year(current_date()) group by kota.id_kota order by jumlah_angka desc");
		return $query->result();
	}

	public function keseluruhan($id_layanan)
	{
		$query=$this->db->query("select kota.nama_kota as nama_kota, sum(angka.jumlah_angka) as jumlah_angka from kota left join angka on kota.id_kota=angka.id_kota && angka.id_layanan='$id_layanan' group by kota.id_kota order by jumlah_angka desc");
		return $query->result();
	}

	public function listing_all_1()
	{
		$query=$this->db->query("select ");
		return $query->result();
	}

	public function layanan1($id_kota,$tanggal_hari_ini)
	{
		$query = $this->db->query("select angka.*, layanan.*, kota.* from angka,layanan,kota where (angka.id_layanan=layanan.id_layanan) && (angka.id_kota=kota.id_kota) && (layanan.kategori_layanan='1') && (angka.id_kota='$id_kota') && (angka.tanggal_angka='$tanggal_hari_ini')");
		return $query->result();
	}

	public function layanan2($id_kota,$tanggal_hari_ini)
	{
		$query = $this->db->query("select angka.*, layanan.*, kota.* from angka,layanan,kota where (angka.id_layanan=layanan.id_layanan) && (angka.id_kota=kota.id_kota) && (layanan.kategori_layanan='2') && (angka.id_kota='$id_kota') && (angka.tanggal_angka='$tanggal_hari_ini')");
		return $query->result();
	}


		//show data detail
	public function detail($id_angka)
	{
		$query=$this->db->get_where('angka',array('id_angka'=>$id_angka));
		return $query->row();
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

	public function add($id_layanan,$id_kota,$tanggal_angka,$data)
	{
		$query = $this->db->query("select * from angka where (id_layanan='$id_layanan') && (id_kota='$id_kota') && (tanggal_angka='$tanggal_angka')");
		if($query->num_rows() == 0){
			$this->db->insert('angka', $data);
		} else {
		$this->db->where(array('id_layanan' => $id_layanan, 'id_kota' => $id_kota, 'tanggal_angka' => $tanggal_angka));
		$this->db->update('angka', $data);
		}
	}

	// public function update($nim, $data){
    // 	$this->db->where('nim', $nim);
    // 	$query = $this->db->update('tb_user', $data);
    // 	return TRUE;
    // }

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */