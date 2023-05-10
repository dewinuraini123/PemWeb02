<?php
//MEMBUAT Array Associative
$profileArray = ["nama" => "Dewi Nuraini", "kelas" => "SI14"];


// print_r($profileArray);

$profileMultiArray = [
    ['nama' => 'Siti', 'kelas' => 'SI14'],
    ['nama' => 'Dewi', 'kelas' => 'SI15'],
    ['nama' => 'Susanti', 'kelas' => 'SI11']
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
};