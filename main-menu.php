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
            <div class="menu absolute flex flex-col gap-4-custom justify-center">
                <h2 class="text-xl text-center"><?= $app['app_name'] ?></h2>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('login.php')">Log In</button>
                <button class="btn btn-primary-sm text-xl" onclick="openLink('register.php')">Registrasi</button>
                <button class="btn btn-primary-sm text-xl hidden" onclick="openLink('forgot-password.php')">Lupa Password</button>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>