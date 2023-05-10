<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "dewi" && $password == "dewi"){
    echo "Login berhasil";
} else {
    echo "Login gagal";
}