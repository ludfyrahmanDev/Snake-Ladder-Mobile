<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <?php
        include "include/cssHeader.php";
    ?>
</head>
<body>
    <div class="main">
        <?php 
        include "include/topHeader.php";
        ?>
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center py-5">
                <h2 class="text-xl text-center"><?= $app['app_name'] ?></h2>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('level.php')">Mulai Game</button>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('gizi.php')">Gizi Seimbang</button>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('history.php')">History</button>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('tutorial.php')">Petunjuk Game</button>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('about.php')">Tentang</button>
                <button class="btn btn-primary-xs btn-primary-sm text-xs lg:text-xl" onclick="openLink('api/logout.php')">Keluar</button>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>