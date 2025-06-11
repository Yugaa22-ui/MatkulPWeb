<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {

    public function getAll()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function create($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function getDetail($id)
    {
        return $this->db->where('mahasiswa_id', $id)->get('mahasiswa')->row_array();
    }

    public function update($id, $data)
    {
        return $this->db->where('mahasiswa_id', $id)->update('mahasiswa', $data);
    }

    public function delete($id)
    {
        return $this->db->where('mahasiswa_id', $id)->delete('mahasiswa');
    }

    public function login($data)
    {
        // Enkripsi password menggunakan SHA1
        $this->db->where('mahasiswa_email', $data['mahasiswa_email']);
        $this->db->where('mahasiswa_password', sha1($data['mahasiswa_password']));
        $ambil = $this->db->get('mahasiswa')->row_array();

        // Pindahkan return setelah logika login
        if ($ambil) {
            $this->session->set_userdata('user', $ambil);
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
