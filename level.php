<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level</title>
    <?php
        include "include/cssHeader.php";
        // check latest game_score
        $user_id = $_SESSION['id'];
        $latest_score = mysqli_query($connect, "SELECT sum(score) score FROM game_score WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 1");
        $latest = mysqli_fetch_assoc($latest_score);
    ?>
</head>
<body>
    <div class="main">
    <?php 
        include "include/topHeader.php";
    ?>
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center py-5">
                <h2 class="text-xl lg:text-4xl text-center">Sigesit</h2>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('game.php?type=amateur')">Amateur</button>
                <button class="btn <?= $latest['score'] >= 9 ? 'btn-primary-sm' : 'btn-disabled' ?> text-xl" <?= $latest['score'] >= 9 ? '' : 'disabled' ?> onclick="openLink('game.php?type=regular')">Regular</button>
                <button class="btn <?= $latest['score'] >= 18 ? 'btn-primary-sm' : 'btn-disabled' ?> text-xl" <?= $latest['score'] >= 18 ? '' : 'disabled' ?> onclick="openLink('game.php?type=professional')">Professional</button>
                <button class="btn btn-primary-sm text-2xl" onclick="openBack()">Kembali</button>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>