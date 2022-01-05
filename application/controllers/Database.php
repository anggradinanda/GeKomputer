<?php

class Database extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Database_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar GeKomputer';
        $data['database'] = $this->Database_model->getAllKomputer();
        if ($this->input->post('keyword')) {
            $data['database'] = $this->Database_model->cariDataDatabase();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('database/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data GeKomputer';

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('database/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Database_model->tambahKomputer();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('database');
        }
    }

    public function hapus($id)
    {
        $this->Database_model->hapusKomputer($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('database');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data GeKomputer';
        $data['database'] = $this->Database_model->getKomputerId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('database/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data GeKomputer';
        $data['database'] = $this->Database_model->getKomputerId($id);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('database/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Database_model->ubahDataKomputer();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('database');
        }
    }
}
