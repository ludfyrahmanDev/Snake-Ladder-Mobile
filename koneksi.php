<?php
session_start();
// read database name from env
$env = parse_ini_file('.env');

$database = $env['DB_DATABASE'];
$host = $env['DB_HOST'];
$user = $env['DB_USERNAME'];
$pass = $env['DB_PASSWORD'];
$connect = mysqli_connect($host, $user, $pass, $database);
if(!$connect){
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>