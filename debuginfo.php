<?php
class Mahasiswa {
    public $nama;
    private $nim, $email;

    public function __debugInfo()
    {
        return array('NIM_Mahasiswa' => $this->nim);
    }
}

$objMahasiswa = new Mahasiswa();
var_dump($objMahasiswa);
?>
