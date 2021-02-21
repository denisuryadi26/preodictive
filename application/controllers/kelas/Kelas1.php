<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->session->set_flashdata('not-login', 'Gagal!');
        // if (!$this->session->userdata('email')) {
        //     redirect('welcome/kelas/kelas1');
        // }
    }

    public function index()
    {
        $this->load->view('template/nav');
        // $this->load->view('index');
        $this->load->view('kelas/kelas1');
        $this->load->view('template/footer');
    }
}