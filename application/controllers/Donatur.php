<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatur extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Donatur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //array donatur
        $data['donatur'] = $this->db->get('donatur')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('donatur/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp')
            ];
            $this->db->insert('donatur', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Donatur berhasil didaftarkan!</div>');
            redirect('donatur');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Ubah Donatur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Donatur_model');
        $data['donatur'] = $this->Donatur_model->getDonaturById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('donatur/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Donatur_model->ubahDonatur();
            redirect('donatur');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('donatur');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Sub menu berhasil dihapus!</div>');
        redirect('donatur');
    }
}
