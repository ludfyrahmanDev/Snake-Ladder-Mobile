<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <?php
        include "include/cssHeader.php";
        $user_id = $_SESSION['id'];
        $query  = "SELECT * FROM game_score WHERE user_id = '$user_id' order by id limit 3";
        $result = mysqli_query($connect, $query);
    ?>
</head>
<body>
    <div class="main">
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center items-center">
                <div class='w-full flex flex-col justify-center items-center'>
                    <h2 class="text-xl text-center">History Permainan</h2>
                    <table class='w-full'>
                        <thead>
                            <tr>
                                <th class='border border-black p-1'>No</th>
                                <th class='border border-black p-1'>Tanggal</th>
                                <th class='border border-black p-1'>Waktu</th>
                                <th class='border border-black p-1'>Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            while($data = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td class='border border-black p-1'><?= $no++ ?></td>
                                <td class='border border-black p-1'><?= date('d, M Y', strtotime($data['created_at'])) ?></td>
                                <td class='border border-black p-1'><?= date('H:i', strtotime($data['created_at'])) ?></td>
                                <td class='border border-black p-1'><?= $data['score'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button class="btn btn-primary text-xl lg:text-2xl mt-2" onclick="openLink('menu.php')">Kembali</button>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>