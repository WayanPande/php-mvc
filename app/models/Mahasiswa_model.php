<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Lojik Aih",
    //         "nim" => "1231312",
    //         "email" => "lojik@gmail.com",
    //         "jurusan" => "Informatika"
    //     ],
    //     [
    //         "nama" => "Wadidwa Aih",
    //         "nim" => "45645646",
    //         "email" => "wadidaw@gmail.com",
    //         "jurusan" => "Perikanan"
    //     ],
    //     [
    //         "nama" => "UWaw Aih",
    //         "nim" => "678687",
    //         "email" => "uwaw@gmail.com",
    //         "jurusan" => "Informatika"
    //     ]
    // ];


    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' Where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
