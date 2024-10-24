<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php
        include "include/cssHeader.php";
    ?>
</head>
<body>
    <div class="main">
        <div class="main-window">
            <div class="menu absolute flex flex-col gap-4">
                <h2 class="text-3xl text-center">Sigesit</h2>
                <form id="myForm">
                    <div>
                        <label for="username" class="text-2xl">Username</label>
                        <input type="text" id="username" class="input p-2 w-full" required placeholder="Username">
                    </div>
                    <div class="mt-1">
                        <label for="parent" class="text-2xl">Nama Orang tua</label>
                        <input type="text" id="parent" class="input p-2 w-full" required placeholder="Nama Orang Tua">
                    </div>
                    <div class="mt-1">
                        <label for="phone" class="text-2xl">No HP</label>
                        <input type="number" id="phone" class="input p-2 w-full" required placeholder="NO HP">
                    </div>
                    <div class="mt-1">
                        <label for="password" class="text-2xl">Password</label>
                        <input type="password" id="password" class="input p-2 w-full" required placeholder="Password">
                    </div>
                    <button class="btn btn-primary text-2xl mt-3" type='submit'>Register</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>
    <script>
        $(function(){
            $('#myForm').submit(function(e){
                e.preventDefault();
                // validate all entire field in form
                let username = $('#username').val();
                let parent = $('#parent').val();
                let phone = $('#phone').val();
                let password = $('#password').val();
                if(username == '' || parent == '' || phone == '' || password == ''){
                    // make toast
                    alert('Semua field harus diisi');
                    return;
                }
                var data = {
                    username: username,
                    parent: parent,
                    phone: phone,
                    password: password
                };
                $.ajax({
                    url: 'api/register.php',
                    type: 'post',
                    data: data,
                    success: function(data){
                        var response = JSON.parse(data);
                       if(response.status == 'success'){
                        showToast('Register Berhasil', 'success');
                        openLinkTimout('login.php');
                        }else{
                            showToast('Register Gagal', 'error');
                        }
                    }
                })
            })
        })
    </script>
   
</body>
</html>