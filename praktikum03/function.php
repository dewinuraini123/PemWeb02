<?php

function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}
hitungUmur(2004);
echo "<br>";
hitungUmur(2005);
echo "<br>";
hitungUmur(2006);
echo "<br>";
hitungUmur(2007);
echo "<br>";

function welcome($nama = "Dewi Nuraini")
{
    echo "Hello, Selamat Datang $nama !";
}
 welcome("Abil");
 echo "<br>";
 welcome("Budi");
 echo "<br>";