<?php
class DataTugas
{
    public $UpinWork;
    public $IpinWork;

    public function __clone()
    {
        $this->UpinWork = "Kloningan dari " . $this->UpinWork;
        $this->IpinWork = "Kloningan dari " . $this->IpinWork;
    }
}

$tugas = new DataTugas();
$tugas->UpinWork = "Matematika Upin";
$tugas->IpinWork = "Fisika Ipin";

$clonetugas = clone $tugas; // memanggil __clone method
echo $clonetugas->UpinWork;
echo "<br>";
echo $clonetugas->IpinWork;
?>
