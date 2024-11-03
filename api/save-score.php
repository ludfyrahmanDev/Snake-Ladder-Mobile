<?php 
include "../koneksi.php";
$score = $_POST['score'];
$user_id = $_SESSION['id'];
$query = "INSERT INTO game_score (score, user_id) VALUES ('$score', '$user_id')";
$exec = mysqli_query($connect, $query);

// check query with user_id
$query = "SELECT * FROM game_score WHERE user_id = '$user_id'";
$exec = mysqli_query($connect, $query);
$score = 0;
while($data = mysqli_fetch_array($exec)){
    $score += $data['score'];
}
$totalScore = $score / 9;
// update to users table
$queryUser = "UPDATE users SET star = '$totalScore' WHERE id = '$user_id'";
$exec = mysqli_query($connect, $queryUser);
if($exec){
    $msg = [
        'status' => 'success',
        'message' => 'Score berhasil disimpan'
    ];
}else{
    $msg = [
        'status' => 'error',
        'message' => 'Score gagal disimpan'
    ];
}
?>