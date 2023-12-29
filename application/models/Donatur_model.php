<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatur_model extends CI_Model
{
    public function getDonaturById($id)
    {
        return $this->db->get_where('donatur', ['id' => $id])->row_array();
    }
    public function ubahDonatur()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('donatur', $data);
    }
}
