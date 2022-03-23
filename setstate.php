<?php
class Mahasiswa {
    public $nama;
    private $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public static function __set_state($mhs_array)
    {
        $objMahasiswa = new Mahasiswa;
        $objMahasiswa->nama = $mhs_array['Nama'];
        $objMahasiswa->nim = $mhs_array['NIM'];
        return $objMahasiswa;
    }
}

$worker = new Mahasiswa('Budi','205150000111000');
var_export($worker);
?>
