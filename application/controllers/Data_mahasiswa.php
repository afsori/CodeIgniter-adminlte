<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Dashboard';
        $data['contents'] = 'admin/dashboard';
        $this->load->view('templates/index', $data);
    }

    public function mahasiswa()
    {
        $data['judul'] = 'Data Mahasiswa';
        $data['contents'] = 'data_mahasiswa/index';
        $data['mahasiswa'] = $this->Mahasiswa_model->getallmahasiswa();

        // Load Library
        $this->load->library('pagination');

        //Config
        $config['base_url'] = 'http://localhost/CodeIgniter-adminlte/Data_mahasiswa/mahasiswa';
        $config['total_rows'] = $this->Mahasiswa_model->countAllMahasiswa();
        $config['per_page'] = 5;
        $config['num_links'] = 4;

        //Styling
        $config['full_tag_open'] = '<nav"><ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul></nav">';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#"> ';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');



        // Initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa($config['per_page'], $data['start']);

        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('templates/index', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['contents'] = 'data_mahasiswa/tambah';
            $this->load->view('templates/index', $data);
        } else {
            $this->Mahasiswa_model->TambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Data_mahasiswa/mahasiswa');
        }
    }

    // public function tambah()
    // {
    //     $data['judul'] = 'Form Tambah Data Mahasiswa';
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['contents'] = 'data_mahasiswa/tambah';
    //         $this->load->view('templates/index', $data);
    //         // $this->load->view('data_mahasiswa/tambah');
    //     } else {
    //         $this->Mahasiswa_model->TambahDataMahasiswa();
    //         $this->session->set_flashdata('flash', 'Ditambahkan');
    //         redirect('Data_mahasiswa/mahasiswa');
    //     }
    // }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Data_mahasiswa/mahasiswa');
    }


    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getmahasiswabyid($id);
        $data['contents'] = 'data_mahasiswa/detail';
        // $this->load->view('templates/header', $data);
        $this->load->view('templates/index', $data);
        // $this->load->view('templates/footer');
    }
    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Data Mahasiswa';
    //     $data['contents'] = 'data_mahasiswa/detail';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getmahasiswabyid($id);
    //     $this->load->view('templates/index', $data);
    // $this->load->view('mahasiswa/detail', $data);
    // $this->load->view('templates/footer');
    // }


    // public function ubah($id)
    // {
    //     $data['judul'] = 'Form Ubah Data Mahasiswa';
    //     $data['contents'] = 'data_mahasiswa/ubah';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->ubahDataMahasiswa($id);
    //     $data['jurusan'] = [
    //         'Teknik Informatika', 'Manajemen Informatika',
    //         'Bahasa Inggris', 'Bahasa Indonesia', 'Mate - Matika', 'Teknik Komputer'
    //     ];



    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //     if ($this->form_validation->run() == FALSE) {
    //         // $this->load->view('templates/header', $data);
    //         $this->load->view('data_mahasiswa/index', $data);
    //         // $this->load->view('templates/footer');
    //     } else {
    //         $this->Mahasiswa_model->ubahDataMahasiswa();
    //         $this->session->set_flashdata('flash', 'Di Ubah');
    //         redirect('Data_mahasiswa/mahasiswa');
    //     }
    // }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['contents'] = 'data_mahasiswa/ubah';
        $data['mahasiswa'] = $this->Mahasiswa_model->ambildatamahasiswadgnId($id);
        $data['jurusan'] = ['Teknik Informatika', 'Bahasa Inggris', 'Manajemen Informatika', 'Bahasa Indonesia', 'Teknik Komputer'];


        /* memberikan form validation untuk */
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar');
            $this->load->view('templates/index', $data);
            // $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahdatamahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Data_mahasiswa/mahasiswa');
        }
    }
}
