<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Dosen';
        $data['contents'] = 'data_dosen/index';
        $data['dosen'] = $this->Dosen_model->getalldosen();

        if ($this->input->post('keyword')) {
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }

        $this->load->view('templates/index', $data);
    }


    public function tambah_dosen()
    {
        $data['judul'] = 'Form Tambah Data Dosen';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data['contents'] = 'data_dosen/tambah_dosen';
            $this->load->view('templates/index', $data);
            // $this->load->view('data_mahasiswa/tambah');
        } else {
            $this->Dosen_model->Tmbhdatadosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Data_dosen');
        }
    }

    public function hapus_dosen($id)
    {
        $this->Dosen_model->hapusdatadosen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_dosen');
    }

    public function detail_dosen($id)
    {
        $data['judul'] = 'Detail Dosen';
        $data['dosen'] = $this->Dosen_model->getdosenbyid($id);
        $data['contents'] = 'data_dosen/detail_dosen';
        $this->load->view('templates/index', $data);
    }

    public function ubah_dosen($id)
    {
        $data['judul'] = 'Form Ubah Data Dosen';
        $data['contents'] = 'data_dosen/ubah_dosen';
        $data['dosen'] = $this->Dosen_model->ambildatadosenId($id);


        /* memberikan form validation untuk */
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar');
            $this->load->view('templates/index', $data);
            // $this->load->view('templates/footer');
        } else {
            $this->Dosen_model->ubahdatadosen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Data_dosen');
        }
    }
}
