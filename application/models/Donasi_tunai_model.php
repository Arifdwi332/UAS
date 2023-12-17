<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_tunai_model extends CI_Model
{
    public function getDonasiTunai()
    {
        $query = "SELECT donasi_tunai.*, donatur.nama
                FROM donasi_tunai JOIN donatur
                ON donasi_tunai.donatur_id = donatur.id";

        return $this->db->query($query)->result_array();
    }
}
