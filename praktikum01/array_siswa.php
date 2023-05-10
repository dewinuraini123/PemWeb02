<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Paytone+One" />
<style>
    h1 {
        text-align: center;
        padding: 50px;
        color: white;
        font-family: "Paytone One"; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } h3 { font-family: "Paytone One"; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: "Paytone One"; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: "Paytone One"; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: "Paytone One"; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; 
    }
    body {
        background-image: url("gmbr.jpg");
        background-size:1500px 800px;
    }
    .fixed_headers {
  width: auto;
  table-layout: fixed;
  border-collapse: collapse;
}
.fixed_headers th {
  text-decoration: underline;
}
.fixed_headers th,
.fixed_headers td {
  padding: 5px;
  text-align: center;
}
.fixed_headers td:nth-child(1),
.fixed_headers th:nth-child(1) {
  min-width: 70px;
}
.fixed_headers td:nth-child(2),
.fixed_headers th:nth-child(2) {
  min-width: 200px;
}
.fixed_headers td:nth-child(3),
.fixed_headers th:nth-child(3) {
  min-width: 150px;
}
.fixed_headers td:nth-child(4),
.fixed_headers th:nth-child(4) {
  min-width: 150px;
}
.fixed_headers td:nth-child(5),
.fixed_headers th:nth-child(5) {
  min-width: 150px;
}
.fixed_headers td:nth-child(6),
.fixed_headers th:nth-child(6) {
  min-width: 150px;
}
.fixed_headers thead {
  background-color: #333;
  color: #FDFDFD;
}
.fixed_headers thead tr {
  display: block;
  position: relative;
  
}
.fixed_headers tbody {
  display: block;
  overflow: auto;
  width: 100%;
  height: auto;
  background-color: white;
}
.fixed_headers tbody tr:nth-child(even) {
  background-color: lightgray;
}
.old_ie_wrapper {
  height: 300px;
  width: 750px;
  overflow-x: hidden;
  overflow-y: auto;
}
.old_ie_wrapper tbody {
  height: auto;
}

</style>
</head>
<body>
<?php
$ns1 = ['id' => 1,'nim' => '01101','uts' => 80,'uas' => 84,'tugas' => 78 ];
$ns2 = ['id' => 2,'nim' => '01121','uts' => 70,'uas' => 50,'tugas' => 68 ];
$ns3 = ['id' => 3,'nim' => '01130','uts' => 60,'uas' => 86,'tugas' => 70 ];
$ns4 = ['id '=> 4,'nim' => '01134','uts' => 90,'uas' => 91,'tugas' => 82 ];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];

?>
<h1>Daftar Nilai Siswa</h1>
<table border="1" width="100%" class="fixed_headers" align="center">
    <thead>
        <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$ns['nim'].'</td>';
            echo'<td>'.$ns['uts'].'</td>';
            echo'<td>'.$ns['uas'].'</td>';
            echo'<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
            echo'<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
</body>
</html>