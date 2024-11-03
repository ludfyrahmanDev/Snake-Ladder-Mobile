<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level</title>
    <?php
        include "include/cssHeader.php";
    ?>
</head>
<body>
    <div class="main">
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center">
                <h2 class="text-4xl text-center">Sigesit</h2>
                <button class="btn btn-primary text-xl" onclick="openLink('game.php')">Amateur</button>
                <button class="btn btn-disabled text-xl" disabled onclick="openLink('game.php')">Regular</button>
                <button class="btn btn-disabled text-xl" disabled onclick="openLink('game.php')">Professional</button>
                <button class="btn btn-primary text-2xl" onclick="openBack()">Kembali</button>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>