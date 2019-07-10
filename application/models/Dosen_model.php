<?php
class Dosen_model extends CI_Model
{
    public function getalldosen()
    {
        return $this->db->get('dosen')->result_array();
    }

    public function Tmbhdatadosen()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->insert('dosen', $data);
    }

    public function cariDataDosen()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('dosen')->result_array();
    }

    public function hapusdatadosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }

    public function getdosenbyid($id)
    {
        return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }

    public function ambildatadosenId($id)
    {
        return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }


    public function ubahdatadosen()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('dosen', $data);
    }
}
