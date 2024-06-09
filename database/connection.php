<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "penggajian";

$connetion = mysqli_connect($servername, $username, $password, $dbname);
if (!$connetion) {
    die("Gagal koneksi: " . mysqli_connect_error());
}