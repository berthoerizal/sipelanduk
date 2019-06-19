<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

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
        if ($this->session->userdata('akses_level') == 21 || $this->session->userdata('username') == 'masterdata') {
            $layanan = $this->layanan_model->listing();
            $valid = $this->form_validation;
            $valid->set_rules('nama_layanan', 'Nama Layanan', 'required|is_unique[layanan.nama_layanan]', array(
                'required' => 'Nama Layanan harus diisi',
                'is_unique' => 'Layanan <strong>' . $this->input->post('nama_layanan') . '</strong> sudah digunakan'
            ));

            if ($valid->run() === FALSE) {
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
                $this->session->set_flashdata('sukses', 'Layanan telah ditambah');
                redirect(base_url('admin/layanan'));
            }
        } else {
            redirect(base_url('error404'));
        }
    }

    public function input_data()
    {
        if ($this->session->userdata('akses_level') == 10) {
            $last_update = $this->angka_model->last_update();
            $angka = $this->angka_model->listing();
            $id_kota = $this->session->userdata('id_kota');
            $layanan1 = $this->layanan_model->listing1();
            $layanan2 = $this->layanan_model->listing2();

            $tanggal_hari_ini = date('y-m-d');
            $angka_layanan1 = $this->angka_model->layanan1($id_kota, $tanggal_hari_ini);
            $angka_layanan2 = $this->angka_model->layanan2($id_kota, $tanggal_hari_ini);

            $valid = $this->form_validation;
            $valid->set_rules('jumlah_angka', 'Jumlah Angka', 'required', array('required' => 'Jumlah Angka harus diisi'));

            if ($valid->run() === FALSE) {
                $data = array(
                    'title' => 'Input Data Pelayanan',
                    'isi' => 'admin/layanan/input_data',
                    'layanan1' => $layanan1,
                    'layanan2' => $layanan2,
                    'angka_layanan1' => $angka_layanan1,
                    'angka_layanan2' => $angka_layanan2,
                    'last_update' => $last_update
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            } else {
                // id_layanan, tanggal_angka, id_kota = update id_angka ?
                $tanggal_angka = date("y-m-d", strtotime($this->input->post('tanggal_angka')));
                $data = array(
                    'id_layanan'        => $this->input->post('id_layanan'),
                    'id_kota'             => $id_kota,
                    'jumlah_angka'        => $this->input->post('jumlah_angka'),
                    'lk'                => $this->input->post('lk'),
                    'pr'                => $this->input->post('pr'),
                    'tanggal_angka'     => $tanggal_angka
                );
                $id_layanan = $this->input->post('id_layanan');

                $this->angka_model->add($id_layanan, $id_kota, $tanggal_angka, $data);
                $this->session->set_flashdata('sukses', 'Data berhasil dimasukkan');
                redirect(base_url('admin/layanan/input_data'));
            }
        } else {
            redirect(base_url('error404'));
        }
    }

    public function data_layanan()
    {
        if ($this->session->userdata('akses_level') == 10) {
            $id_kota = $this->session->userdata('id_kota');
            $angka = $this->angka_model->listing_angka($id_kota);
            $last_update = $this->angka_model->last_update();
            $data = array('title' => 'Data Layanan', 'isi' => 'admin/layanan/data_layanan', 'angka' => $angka, 'last_update' => $last_update);
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            redirect(base_url('error404'));
        }
    }

    public function hapus($id_angka)
    {
        $angka = $this->angka_model->detail($id_angka);
        $data = array('id_angka' => $angka->id_angka);
        $this->angka_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data telah dihapus');
        redirect(base_url('admin/layanan/data_layanan'));
    }

    public function edit($id_angka)
    {
        $this->form_validation->set_rules('jumlah_angka', 'Jumlah Angka', 'required', array('required' => 'Jumlah Angka harus diisi'));

        if ($this->form_validation->run() === FALSE) {
            redirect('admin/layanan/data_layanan');
        } else {
            $data = array(
                'id_angka'    => $id_angka,
                'jumlah_angka' => $this->input->post('jumlah_angka'),
                'lk' => $this->input->post('lk'),
                'pr' => $this->input->post('pr')
            );

            $this->angka_model->update($data);
            $this->session->set_flashdata('sukses', 'Data telah diedit');
            redirect(base_url('admin/layanan/data_layanan'));
        }
    }
}
