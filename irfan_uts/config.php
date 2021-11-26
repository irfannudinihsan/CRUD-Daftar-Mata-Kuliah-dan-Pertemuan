<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "irfan_uts";

$koneksi = mysqli_connect($server, $user , $password, $database);

if(!$koneksi) {
    die("gagal terhubung ke database".mysqli_connect_error());
}

?>