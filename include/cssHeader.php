<!-- import style -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/window.css">
<link rel="stylesheet" href="assets/css/button.css">


<?php 
include "koneksi.php";
// show name file
$filename = basename($_SERVER['PHP_SELF']);
$username = @$_SESSION['username'];
if($filename == 'menu.php'){
    // check session
    if(!isset($username)){
        header('Location: login.php');
    }else{
        $username = $_SESSION['username'];
        if(!checkIsLogin($username)){
            header('Location: login.php');
        }
    }
}else if(isset($username)){
    if(checkIsLogin($username)){
        header('Location: menu.php');
    }
}

function checkIsLogin($username){
    global $connect;
    $checkUsername = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($checkUsername) > 0){
        return true;
    }else{
        return false;
    }
}
?>