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
                <h2 class="text-4xl text-center"><?= $app['app_name'] ?></h2>
                <form  id='loginForm' class='w-1/3'>
                    <div>
                        <label for="username" class="text-2xl">Username</label>
                        <input type="text" id="username" class="input p-2 w-full" required placeholder="Username" required>
                    </div>
                    <div class="mt-2">
                        <label for="password" class="text-2xl">Password</label>
                        <input type="password" id="password" class="input p-2 w-full" required placeholder="Password" required>
                    </div>
                        <button class="btn btn-primary mt-2 text-xl w-full" type='submit'>Log In</button>
                        <button class="btn btn-primary text-xl w-full" type='button' onclick="openLink('main-menu.php')">Kembali</button>
                </form>
               
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
    <script>
        $(function(){
            // on submit form
            $('#loginForm').submit(function(e){
                e.preventDefault();
                let username = $('#username').val();
                let password = $('#password').val();
                if(username == '' || password == ''){
                    showToast('Semua field harus diisi', 'error');
                    return;
                }
                var data = {
                    username: username,
                    password: password
                };
                $.ajax({
                    url: 'api/login.php',
                    type: 'POST',
                    data: data,
                    success: function(response){
                        let res = JSON.parse(response);
                        if(res.status == 'success'){
                            showToast(res.message, 'success');
                            openLinkTimout('menu.php');
                        }else{
                            showToast(res.message, 'error');
                        }
                    }
                });
            });
        })
    </script>
</body>
</html>