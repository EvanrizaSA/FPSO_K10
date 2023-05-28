<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/login.css'); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Ranmits</title>
</head>

<body>
    <div class="background">
        <div class="navbar">
            <img class="logo" src="<?php echo asset('images/logo.png'); ?>" alt="">
            <img class="menu" src="<?php echo asset('images/menu.png'); ?>" alt="">
        </div>
        <div class="login-container">
            <p class="login-title">Login</p>
            <div class="text-field">
                <div class="fields">
                    <p>Alamat Email</p>
                    <input type="text" placeholder="Masukkan alamat email">
                </div>
                <div class="fields">
                    <p>Password</p>
                    <input type="text" placeholder="Masukkan password">
                </div>
            </div>
            <button class="login-btn">
                <p>Login</p>
            </button>
            <p class="link-sign-up">
                Belum punya akun ? <span>Buat akun</span>
            </p>
        </div>
    </div>

    <div>

    </div>
</body>

</html>
