<?php
include "../koneksi.php";
$user_id = $_SESSION['id'];
$check = mysqli_query($connect, "SELECT health FROM users WHERE id = '$user_id'");
$data = mysqli_fetch_assoc($check);
if($data['health'] > 0){
    $health = $data['health'] - 1;
    // update
    $update = mysqli_query($connect, "UPDATE users SET health = '$health' WHERE id = '$user_id'");
    $msg = [
        'status' => 'success',
        'message' => 'Berhasil menggunakan Nyawa',
        'health' => $health
    ];
}else{
    $msg = [
        'status' => 'error',
        'message' => 'Nyawa tidak cukup'
    ];
}
echo json_encode($msg);