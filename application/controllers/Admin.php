<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    //security login
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            is_logged_in();
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //get db tabel donasi barang
        $data['donasiBarang'] = $this->db->get('donasi_barang')->result_array();
        //menghitung donasi barang
        $jumlahDonasiBarang = count($data['donasiBarang']);
        //ubah variabel
        $data['jumlahDonasiBarang'] = $jumlahDonasiBarang;

        //get db tabel donasi tunai
        $data['donasiTunai'] = $this->db->get('donasi_tunai')->result_array();
        //menghitung donasi tunai
        $jumlahDonasiTunai = count($data['donasiTunai']);
        //ubah variabel
        $data['jumlahDonasiTunai'] = $jumlahDonasiTunai;

        //get db tabel donasi tunai
        $data['donatur'] = $this->db->get('donatur')->result_array();
        //menghitung donasi tunai
        $jumlahDonatur = count($data['donatur']);
        //ubah variabel
        $data['jumlahDonatur'] = $jumlahDonatur;

        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
