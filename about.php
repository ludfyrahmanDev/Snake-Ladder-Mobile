<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Menu</title>
    <?php
        include "include/cssHeader.php";
    ?>
</head>
<body>
    <div class="main">
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4">
                <h1 class="text-4xl text-center">Tentang Aplikasi</h1>
                <p class="text-center" style="padding-left: 8%;padding-right:8%;"><?= $app['description'] ?></p>
                <!-- contact -->
                <div class="contact flex flex-col gap-2">
                    <h2 class="text-2xl text-center">Kontak</h2>
                    <p class="text-center">Email : yohanyuanta@gmail.com</p>
                    <p class="text-center">Email : <?= $app['email'] ?></p>
                    
                </div>
                <div class="flex flex-col items-center content-center text-center">
                    <button class="btn btn-primary text-2xl" onclick="openBack()">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>