<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_barang_model extends CI_Model
{
    public function getDonasiBarang()
    {
        $query = "SELECT donasi_barang.*, donatur.nama
                FROM donasi_barang JOIN donatur
                ON donasi_barang.donatur_id = donatur.id";

        return $this->db->query($query)->result_array();
    }
}
