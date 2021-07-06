<?php

$server = "localhost";
$username = "root";
$pass = "root";
$db = "teguh_prasetyo_s6g";

$koneksi = mysqli_connect($server, $username, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
