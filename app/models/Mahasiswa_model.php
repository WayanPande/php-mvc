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

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
