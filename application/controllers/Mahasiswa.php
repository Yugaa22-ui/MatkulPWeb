<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('MahasiswaModel');
        $this->load->library('form_validation'); // PENTING: Pastikan form_validation diload

        if (!$this->session->userdata('user')) {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $mahasiswa = $this->MahasiswaModel->getAll();

        echo "<pre>";
        print_r($mahasiswa);
        echo "</pre>";
    }

    public function store()
    {
        $formulir = [
            "mahasiswa_nim"  => "2301010302",
            "mahasiswa_nama" => "Lalu Rana SupraYoga",
        ];

        $this->form_validation->set_data($formulir);

        //  Validasi NIM
        $this->form_validation->set_rules(
            'mahasiswa_nim',
            'NIM',
            'required|min_length[10]|max_length[10]|numeric|is_unique[mahasiswa.mahasiswa_nim]'
        );

        //  Validasi NAMA
        $this->form_validation->set_rules(
            'mahasiswa_nama',
            'Nama',
            'required|min_length[3]|max_length[100]|alpha_numeric_spaces'
        );

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $this->MahasiswaModel->create($formulir);
            echo "Berhasil menyimpan data";
        }

        // Akses : http://localhost/pweb/mahasiswa/store
    }

    public function detail($mahasiswa_id)
    {
        $mahasiswa = $this->MahasiswaModel->getDetail($mahasiswa_id);
        
        echo "<pre>";
        print_r($mahasiswa);
        echo "</pre>";
    }

    public function edit($mahasiswa_id)
    {   
        $formulir = [
            "mahasiswa_nim"  => "2301010301",
            "mahasiswa_nama" => "Lalu Rana SupraYoga",
        ];

            $this->MahasiswaModel->update($mahasiswa_id, $formulir);
            echo "Berhasil mengubah data";
    }

    public function delete($mahasiswa_id)
    {
        $this->MahasiswaModel->delete($mahasiswa_id);
        echo "Berhasil menghapus data";

        // Akses : http://localhost/pweb/mahasiswa/delete/1
    }
}
