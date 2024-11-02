<!-- make login design -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include "../include/cssHeader.php";
        $login = @$_POST['username'];
        if($login){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password' and level='admin'");
            $check = mysqli_num_rows($query);
            if($check > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = $data['level'];
                header("location:dashboard.php");
            }else{
                echo "<script>alert('Username atau Password Salah')</script>";
            }
        }
    ?>
 </head>
 <body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>

    <form class="mt-6"  method='post' action=''>
      <!-- Email Input -->
      <div>
        <label for="username" class="block text-sm text-gray-700">Username</label>
        <input type="text" id="username" name='username' class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your Username">
      </div>

      <!-- Password Input -->
      <div class="mt-4">
        <label for="password" class="block text-sm text-gray-700">Password</label>
        <input type="password" id="password" name='password' class="w-full mt-2 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter your password">
      </div>

      <!-- Login Button -->
      <button type="submit"  class="w-full mt-6 p-3 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        Login
      </button>
    </form>
  </div>
  <?php
        include "../include/footer.php";
    ?>
</body>
 </html>