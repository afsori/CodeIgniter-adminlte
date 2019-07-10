<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inventaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventaris_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Data Inventaris';
        $data['contents'] = 'inventaris/index';
        $data['barang'] = $this->Inventaris_model->getAllBarang();

        if ($this->input->post('keyword')) {
            $data['barang'] = $this->Inventaris_model->cariDataBarang();
        }

        $this->load->view('templates/index', $data);
    }

    public function tambahbarang()
    {
        $data['judul'] = 'Form Tambah Data Barang';
        $this->form_validation->set_rules('kd_barang', 'Kode Barang', 'required|numeric');
        $this->form_validation->set_rules('nm_barang', 'Nama', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['contents'] = 'inventaris';
            $this->load->view('templates/index', $data);
        } else {
            $this->Inventaris_model->TambahDataBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Inventaris');
        }
    }

    public function hapusdata($brg_id)
    {
        $this->Inventaris_model->hapusDataBarang($brg_id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Inventaris');
    }

    public function detilBarang($brg_id)
    {
        $data['judul'] = 'Detail Barang';
        $data['contents'] = 'inventaris/detil_Barang';
        $data['barang'] = $this->Inventaris_model->detilBarang($brg_id);

        $this->load->view('templates/index', $data);
    }

    public function update($brg_id)
    {
        $data['judul'] = 'Ubah Data Barang';
        $data['barang'] = $this->Inventaris_model->ubahDataBarang($brg_id);
        $data['contents'] = 'Inventaris/updateDataBarang';

        /* memberikan form validation untuk */
        $this->form_validation->set_rules('kd_barang', 'Kode Barang', 'required|numeric');
        $this->form_validation->set_rules('nm_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/index', $data);
        } else {
            $this->Inventaris_model->updateDataBarang();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('Inventaris');
        }
    }
}
