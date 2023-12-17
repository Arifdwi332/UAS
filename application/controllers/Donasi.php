<?php
defined('BASEPATH') or exit('No direct script access allowed');

class donasi extends CI_Controller
{
    public function donasiBarang()
    {
        $data['title'] = 'Donasi Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //array get donasi barang db
        $data['donasiBarang'] = $this->db->get('donasi_barang')->result_array();

        //get data donatur
        $data['donatur'] = $this->db->get('donatur')->result_array();

        //load model
        $this->load->model('Donasi_barang_model', 'donatur');

        //query get donatur menggunakan model
        $data['donasiBarang'] = $this->donatur->getDonasiBarang();

        $this->form_validation->set_rules('donatur_id', 'Donatur_id', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('donasi/donasi_barang', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'donatur_id' => $this->input->post('donatur_id'),
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'keterangan' => $this->input->post('keterangan')
            ];
            $this->db->insert('donasi_barang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Donasi Barang berhasil didaftarkan!</div>');
            redirect('donasi/donasiBarang');
        }
    }
    public function detailDonasiBarang($id)
    {
        $data['title'] = 'Detail Donasi Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Donasi_model');
        $data['donasiBarang'] = $this->Donasi_model->getDonasiBarangById($id);

        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('donasi/detailDonasibarang', $data);
        $this->load->view('templates/footer');
    }
    public function cetakDonasiBarang($id)
    {
        $data['title'] = 'Donasi Barang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Donasi_model');
        $data['donasiBarang'] = $this->Donasi_model->getDonasiBarangById($id);

        $this->load->view('donasi/cetakBarang', $data);
    }
    public function donasiBarangHapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('donasi_barang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Donasi barang berhasil dihapus!</div>');
        redirect('donasi/donasiBarang');
    }

    public function donasiTunai()
    {
        $data['title'] = 'Donasi Tunai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //array donatur
        $data['donasiTunai'] = $this->db->get('donasi_tunai')->result_array();

        //get data donatur
        $data['donatur'] = $this->db->get('donatur')->result_array();

        //load model
        $this->load->model('Donasi_tunai_model', 'donatur');

        //query get donatur menggunakan model
        $data['donasiTunai'] = $this->donatur->getDonasiTunai();

        $this->form_validation->set_rules('donatur_id', 'Donatur_id', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('terbilang', 'terbilang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('donasi/donasi_tunai', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'donatur_id' => $this->input->post('donatur_id'),
                'jumlah' => $this->input->post('jumlah'),
                'terbilang' => $this->input->post('terbilang'),
                'keterangan' => $this->input->post('keterangan')
            ];
            $this->db->insert('donasi_tunai', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Donasi tunai berhasil didaftarkan!</div>');
            redirect('donasi/donasiTunai');
        }
    }
    public function detailDonasiTunai($id)
    {
        $data['title'] = 'Detail Donasi Tunai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Donasi_model');
        $data['donasiTunai'] = $this->Donasi_model->getDonasiTunaiById($id);

        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('donasi/detailDonasiTunai', $data);
        $this->load->view('templates/footer');
    }
    public function cetakDonasiTunai($id)
    {
        $data['title'] = 'Donasi Tunai';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Donasi_model');
        $data['donasiTunai'] = $this->Donasi_model->getDonasiTunaiById($id);

        $this->load->view('donasi/cetakTunai', $data);
    }
    public function donasiTunaiHapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('donasi_tunai');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Donasi tunai berhasil dihapus!</div>');
        redirect('donasi/donasiTunai');
    }
}
