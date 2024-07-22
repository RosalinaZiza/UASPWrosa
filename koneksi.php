<?php

$server = "sql211.infinityfree.com";
$username = "if0_36926667";
$password = "VeqPn7oSZL";
$database = "if0_36926667_ochabase";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
