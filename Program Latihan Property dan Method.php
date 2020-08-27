<?php
class Keluarga{
    public $ayah = "Budi",
           $ibu = "Nur",
           $anak = "Udin";

    public function nama_keluarga(){
        return "Anggota Keluarga : $this->ayah, $this->ibu, $this->anak";
    }

}
$keluarga1 = new Keluarga();
$keluarga2 = new Keluarga();
$keluarga2->ayah = "Asep";
$keluarga2->ibu = "Lili";
$keluarga2->anak = "Riska";
echo $keluarga1->nama_keluarga();
echo "<br>";
echo $keluarga2->nama_keluarga();

?>