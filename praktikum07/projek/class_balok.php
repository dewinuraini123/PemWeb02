<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }
    

    function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$objek = new Balok(2,3,4);
echo $objek->hitungVolume();