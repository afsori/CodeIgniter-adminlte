<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            // $this->load->view('templates/header', $data);
            $this->load->view('auth/login2');
            // $this->load->view('templates/footer');

        } else {
            // validasi akan dijalankan ketika benar / sukses //
            // buat method baru //
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika user ada //
        if ($user) {
            // jika user aktif //
            if ($user['is_active'] == 1) {
                // cek password//
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // kita simpan ke session //
                    $this->session->set_userdata($data);
                    // jika role id = 1, maka //
                    if ($user['role_id'] == 1) {
                        redirect('Data_mahasiswa');
                    } else {
                        redirect('Data_mahasiswa');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password Salah !
                   </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email Belum Di Aktivasi !
           </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar !
           </div>');
            redirect('auth');
        }
    }



    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah terdaftar !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Kata sandi tidak sama !',
            'min_length' => 'Kata sandi terlalu pendek !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Registrasi';
            // $this->load->view('templates/header', $data);
            $this->load->view('auth/register');
            // $this->load->view('templates/footer');
        } else { {
                $data = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'gambar' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 2,
                    'is_active' => 1,
                    'date_created' => time()
                ];


                $this->db->insert('user', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Selamat ! Akun sudah dibuat. Silahkan masuk!
                </div>');
                redirect('auth');
            }
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                 Akun Anda sudah Keluar !
                </div>');
        redirect('auth');
    }
}
