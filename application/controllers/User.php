<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/index', $data);
    }
}
