<?php

$server = "localhost";
$username = "root";
$pass = "root";
$db = "kampus";

$koneksi = mysqli_connect($server, $username, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
