<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasar extends CI_Controller {

    public function index()
    {
        // =================================
        // 7. FUNGSI
        // =================================
        echo "<h2>7.    Fungsi</h2>";

        $data = $this->data();
        $dataAndi = $this->ambilData($data, 0);

        echo "<pre>";
        print_r($dataAndi);
        echo "</pre>";
    }

    public function data()
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

        return $mahasiswa;
    }

    public function ambilData($data, $index)
    {
        return $data[$index];
    }
    
}


