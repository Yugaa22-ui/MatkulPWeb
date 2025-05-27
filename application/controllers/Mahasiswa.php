<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }

    public function index()
    {
        $mahasiswa = $this->MahasiswaModel->getAll();

        echo "<pre>";
        print_r($mahasiswa);
        echo "</pre>";
    }

    public function save()
    {
        $formulir = [
            "mahasiswa_nim" => "301",
            "mahasiswa_nama" => "yoga",
        ];

        $this->MahasiswaModel->create($formulir);
        echo "Berhasil menyimpan data";

        // Akses : http://localhost/pweb/mahasiswa/create
    }

    public function ubah($mahasiswa_id)
    {
        $formulir = [
            "mahasiswa_nim" => "301",
            "mahasiswa_nama" => "Nama Baru",
        ];
        $this->MahasiswaModel->update($mahasiswa_id, $formulir);
        echo "Berhasil mengubah data";

        // Akses : http://localhost/pweb/mahasiswa/ubah/1
    }

    public function hapus($mahasiswa_id)
    {
        $this->MahasiswaModel->delete($mahasiswa_id);
        echo "Berhasil menghapus data";

        // Akses : http://localhost/pweb/mahasiswa/hapus/1
    }
}