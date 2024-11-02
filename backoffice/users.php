<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Form</title>
  <?php
    include "../include/cssHeader.php";
    // users join with user score latest data
    $query = "SELECT * FROM users u LEFT JOIN game_score g ON u.id = g.user_id ORDER BY g.score DESC";
    $data = mysqli_query($connect, $query);
    $no = 1;

    ?>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col md:flex-row">
<?php
    include "../include/sidebar.php";
?>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col ">
    <?php
        include "../include/header.php";
    ?>
     <!-- Main Dashboard Content -->
     <main class="flex-1 p-6">
        <div class="w-full bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-start text-gray-800">Users</h2>
            <!-- make table responsive -->
            <div class="overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id='table'>
                    <thead>
                        <tr
                            class="text-lg font-semibold tracking-wide text-left text-indigo-600 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Username</th>
                            <th class="px-4 py-3">Score</th>
                            <th class="px-4 py-3">Star</th>
                            <th class="px-4 py-3">Health</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $index= 1;
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td class="px-4 py-3"><?=$index++?></td>
                            <td class="px-4 py-3"><?= $d['username'] ?></td>
                            <td class="px-4 py-3"><?= $d['score'] ?? 0 ?></td>
                            <td class="px-4 py-3"><?= $d['star'] ?? 0 ?></td>
                            <td class="px-4 py-3"><?= $d['health'] ?? 0 ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
  </div>
</div>
<?php
    include "../include/footer.php";
?>
    
</body>
</html>
