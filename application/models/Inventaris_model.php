<?php
class Inventaris_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }

    public function TambahDataBarang()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang', true),
            "nm_barang" => $this->input->post('nm_barang', true),
            "stok" => $this->input->post('stok', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];


        $this->db->insert('barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_barang', $keyword);
        $this->db->or_like('nm_barang', $keyword);
        $this->db->or_like('stok', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get('barang')->result_array();
    }

    public function hapusDataBarang($brg_id)
    {
        $this->db->where('brg_id', $brg_id);
        $this->db->delete('barang');
    }

    public function detilBarang($brg_id)
    {
        return $this->db->get_where('barang', ['brg_id' => $brg_id])->row_array();
    }

    public function ubahDataBarang($brg_id)
    {
        return $this->db->get_where('barang', ['brg_id' => $brg_id])->row_array();
    }

    public function updateDataBarang()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang', true),
            "nm_barang" => $this->input->post('nm_barang', true),
            "stok" => $this->input->post('stok', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->where('brg_id', $this->input->post('brg_id'));
        $this->db->update('barang', $data);
    }
}
