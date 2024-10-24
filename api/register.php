<?php 
include "../koneksi.php";
$type = @$_GET['type'];
$username = @$_POST['username'];
$parent = @$_POST['parent'];
$phone = @$_POST['phone'];
$password = md5(@$_POST['password']);
if($username == '' || $parent == '' || $phone == '' || $password == ''){
    $msg = [
        'status' => 'error',
        'message' => 'Semua field harus diisi'
    ];
    return;
}
// insert data to a 
$sql = "INSERT INTO users (username, parent, phone, password, is_active) VALUES ('$username', '$parent', '$phone', '$password', 1)";
$query = mysqli_query($connect, $sql);
if($query){
    $msg = [
        'status' => 'success',
        'message' => 'Register Berhasil'
    ];
}else{
    $msg = [
        'status' => 'error',
        'message' => 'Register Gagal'
    ];
}
echo json_encode($msg);

?>