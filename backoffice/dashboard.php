<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dashboard</title>
  <?php
    include "../include/cssHeader.php";
    $query = "SELECT * FROM users u LEFT JOIN game_score g ON u.id = g.user_id ORDER BY g.score DESC";
    $data = mysqli_query($connect, $query);
    ?>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col md:flex-row">
<?php
    include "../include/sidebar.php";
?>
  

  <!-- Main Content Area -->
  <div class="flex-1 flex flex-col ">
    <!-- Header -->
   <?php
    include "../include/header.php";
?>

    <!-- Main Dashboard Content -->
    <main class="flex-1 p-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 gap-6">
        
        <!-- Dashboard Cards -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-semibold text-gray-700">Users</h3>
          <p class="text-2xl font-bold text-indigo-700 mt-2"><?= $data->num_rows ?></p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-semibold text-gray-700">Installer</h3>
          <p class="text-2xl font-bold text-indigo-700 mt-2"><?= $data->num_rows ?></p>
        </div>
        <!-- Additional Cards as Needed -->
      </div>
      <div class="mt-4 bg-white rounded p-4">
        <h4 class='text-blue-800 font-bold'>Daftar Pemain Terbaik</h4>
        <table class="bg-white w-full rounded-lg text-sm">
            <thead>
                <tr>
                    <th class='py-3 text-start px-3 lg:table-cell text-gray-600'>Username</th>
                    <th class='py-3 text-start px-3 lg:table-cell text-gray-600'>Skor</th>
                    <th class='py-3 text-start px-3 lg:table-cell text-gray-600'>Posisi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $index= 1;
                    while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class='py-3 px-3 lg:table-cell'><?= $d['username'] ?></td>
                    <td class='py-3 px-3 lg:table-cell'><?= $d['score'] ?? 0 ?></td>
                    <td class='py-3 px-3 lg:table-cell'><?= $index++ ?></td>
                </tr>
                <?php
                    }
                ?>
               
            </tbody>
        </table>
      </div>
    </main>
  </div>
<?php
    include "../include/footer.php";
?>
</body>
</html>
