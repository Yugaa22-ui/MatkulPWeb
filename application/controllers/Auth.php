<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->library('session');
    }

    public function index()
    {
        $mahasiswa = [
            [
                "nama"      => "Andi",
                "nim"       => "220101",
                "jurusan"   => "Informatika",
                "nilai"     => [90, 85, 88]
            ],
            [
                "nama"      => "Budi",
                "nim"       => "220102",
                "jurusan"   => "Sistem Informasi",
                "nilai"     => [75, 80, 70]
            ],
            [
                "nama"      => "Citra",
                "nim"       => "220103",
                "jurusan"   => "Teknik Komputer",
                "nilai"     => [95, 92, 94]
            ]
        ];

        // ✅ Gunakan key session yang jelas jika data bukan user login
        $this->session->set_userdata('daftar_mahasiswa', $mahasiswa);

        echo "Data mahasiswa berhasil disimpan ke session.";
    }

    public function ambil()
    {
        // ✅ Ambil data user login atau data mahasiswa, tergantung kebutuhan
        $data = $this->session->userdata('user');

        if ($data) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        } else {
            echo "Belum login atau data tidak ditemukan.";
        }
    }

    public function remove()
    {
        // ✅ Pastikan key sama dengan yang digunakan saat set_userdata
        $this->session->unset_userdata('daftar_mahasiswa');

        echo "Berhasil menghapus data mahasiswa dari session.";
    }

    public function login()
    {
        // Contoh login statis (real-case seharusnya dari POST)
        $formulir = [
            'mahasiswa_email'    => 'yura@gmail.com',
            'mahasiswa_password' => 'yura123',
        ];

        $login = $this->MahasiswaModel->login($formulir);

        if ($login === 'berhasil') {
            echo "Berhasil login.";
        } else {
            echo "Gagal login. Cek kembali email dan password!";
        }

        // Akses: http://localhost/pweb/auth/login
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }
}
