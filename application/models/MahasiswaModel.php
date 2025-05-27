<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaModel extends CI_Model {
    public function getAll()
    {
        return $this->db->get('mahasiswa')->result_array();

    }

    public function create($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('mahasiswa_id', $id)->update('mahasiswa', $data);
    }

    public function delete($id)
    {
        $this->db->where('mahasiswa_id', $id)->delete('mahasiswa');
    }
}