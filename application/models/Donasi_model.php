<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_model extends CI_Model
{
    public function getDonasiBarangById($id)
    {
        return $this->db->get_where('donasi_barang', ['id' => $id])->row_array();
    }
    public function getDonasiTunaiById($id)
    {
        return $this->db->get_where('donasi_Tunai', ['id' => $id])->row_array();
    }
}
