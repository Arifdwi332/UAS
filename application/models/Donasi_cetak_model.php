<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_cetak_model extends CI_Model
{
    public function getDonasiBarangById()
    {
        return $this->db->get_where('donasi_barang', ['id' => $id])->row_array();
    }
}
