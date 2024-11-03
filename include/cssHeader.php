<!-- import style -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/window.css">
<link rel="stylesheet" href="assets/css/button.css">
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<?php 
if((@include "koneksi.php") === false){
    include "../koneksi.php";
}else{
    // include "koneksi.php";
}
// show name file
$filename = basename($_SERVER['PHP_SELF']);
$username = @$_SESSION['username'];
$app = mysqli_query($connect, "SELECT * FROM sites limit 1");
$app = mysqli_fetch_assoc($app);
if(in_array($filename, ['menu.php', 'game.php', 'level.php'])){
    // check session
    if(!isset($username)){
        header('Location: login.php');
    }else{
        $username = $_SESSION['username'];
        if(!checkIsLogin($username)){
            header('Location: login.php');
        }else{
            $loginData = getLogin($username);
        }
    }
}else if(isset($username)){
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    if(in_array('backoffice', $url)){
    }else if(checkIsLogin($username)){
        // header('Location: menu.php');
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
function getLogin($username){
    global $connect;
    $checkUsername = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($checkUsername) > 0){
        return mysqli_fetch_assoc($checkUsername);
    }else{
        return false;
    }
}
?>