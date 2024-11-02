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
            <div class="menu absolute flex flex-col gap-4 items-center content-center">
                <h2 class="text-4xl text-center">Sigesit</h2>
                <form action="">
                    <div>
                        <label for="phone" class="text-2xl">NO HP</label>
                        <input type="text" id="phone" class="input p-2" required placeholder="NO HP">
                    </div>
                </form>
                <p>Kode Verifikasi akan dikirim ke nomor yang di inputkan. silahkan input no hp dengan benar</p>
                <button class="btn btn-primary text-2xl" onclick="openLink('menu.php')">Kirim Kode Verifikasi</button>
                <button class="btn btn-primary text-2xl" onclick="openLink('main-menu.php')">Kembali</button>
                
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>