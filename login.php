<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <?php
        include "include/cssHeader.php";
        print_r($_SESSION);
    ?>
</head>
<body>
    <div class="main">
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4-custom justify-center items-center">
                <h2 class="text-4xl text-center">Sigesit</h2>
                <form  id='loginForm'>
                    <div>
                        <label for="username" class="text-2xl">Username</label>
                        <input type="text" id="username" class="input p-2" required placeholder="Username" required>
                    </div>
                    <div class="mt-2">
                        <label for="password" class="text-2xl">Password</label>
                        <input type="password" id="password" class="input p-2" required placeholder="Password" required>
                    </div>
                    <div class='flex items-center justify-center w-full mt-2'>
                        <button class="btn btn-primary text-xl" type='submit'>Log In</button>
                        <button class="btn btn-primary text-xl" type='button' onclick="openLink('main-menu.html')">Kembali</button>
                    </div>
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