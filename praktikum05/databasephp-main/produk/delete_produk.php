<?php 
include '../dbkoneksi.php';

$query = "DELETE FROM produk WHERE id='$_GET[iddel]'"; 
$data = $dbh->prepare($query);
$data->execute();

header('Location: list_produk.php');
?>
