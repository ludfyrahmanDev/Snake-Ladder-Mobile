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
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center items-center">
                <div class='flex items-center justify-center flex-col'>
                    <h2 class="text-xl text-center">Sigesit</h2>
                    <p class='text-xs lg:text-lg'>
                    <?= $app['tutorial'] ?>  
                    </p>
                    <button class="btn btn-primary text-2xl" onclick="openLink('menu.php')">Kembali</button>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>