<?php
$arrayBuah = ["Alpukat","Jeruk","Mangga","Durian","Strawbery"];

//mengurutkan value sesuai urutan abjad
sort($arrayBuah);

//menghapus value array paling akhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[3]);

//menambahkan value pada array diakhir
array_push($arrayBuah,"Naga");

//menghapus value array paling awal
array_shift($arrayBuah);

//menambahkan value pada array awal
array_unshift($arrayBuah, "Pepaya");

//mengubah value array tertentu
$arrayBuah[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}