<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <?php
        include "include/cssHeader.php";
    ?>
</head>
<body>
    <div class="main">
        <div class="card-top absolute top-0 right-0 end-0 z-50">
            <div class="relative">
                <h1 class="absolute text-white text-3xl" style="right: 50%;top:35%">3</h1>
                <img src="assets/img/button/badge.png" alt="">
                <img src="assets/img/icon/love.png" alt="" class="love absolute right-7 top-7">
            </div>
            <div class="relative">
                <h1 class="absolute text-white text-3xl" style="right: 50%;top:35%">1</h1>
                <img src="assets/img/button/badge.png" alt="">
                <img src="assets/img/icon/star.png" alt="" class="love absolute right-6 top-6">
            </div>
        </div>
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center">
                <h2 class="text-xl text-center">Sigesit</h2>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('level.html')">Mulai Game</button>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('gizi.html')">Gizi Seimbang</button>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('history.html')">History</button>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('tutorial.html')">Petunjuk Game</button>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('about.html')">Tentang</button>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>