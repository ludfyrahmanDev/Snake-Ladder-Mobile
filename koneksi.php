<?php
$connect = mysqli_connect("localhost", "root", "", "project_php_game_sigesit");
if(!$connect){
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>