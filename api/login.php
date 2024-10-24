<?php 
include "../koneksi.php";
$username = @$_POST['username'];
$password = md5(@$_POST['password']);
if($username == '' || $password == ''){
    $msg = [
        'status' => 'error',
        'message' => 'Semua field harus diisi'
    ];
    echo json_encode($msg);
    return;
}
$sql = "SELECT * FROM users WHERE (username = '$username' || phone = '$username') AND password = '$password'";
$query = mysqli_query($connect, $sql);
if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $data['username'];
    $_SESSION['id'] = $data['id'];
    $msg = [
        'status' => 'success',
        'message' => 'Login Berhasil',
        'data' => $data
    ];
}else{
    $msg = [
        'status' => 'error',
        'message' => 'Login Gagal'
    ];
}
echo json_encode($msg);
?>