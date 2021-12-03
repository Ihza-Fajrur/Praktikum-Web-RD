<?php
session_start();
if(isset($_SESSION['userID'])){
    header("Location: home.php");
    die();
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}">

    <title>Praktikum MG8</title>
    <style>
        html,
        body {
        height: 100%;
        background-color: #07361b;
        font-family: "Poppins", sans-serif !important;
        }

        .img {
        /* Logo-Sekolah*/
        position: relative;
        width: 115px;
        height: 115px;
        left: calc(50% - 115px / 2 + 0.5px);
        top: 0px;

        background: url(.png);
        }

        .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .login-form {
        width: 380px;
        height: 450px;
        padding: 20px;
        background-color: white !important;
        border-radius: 20px !important;
        box-shadow: 0px 100px 80px rgba(0, 0, 0, 0.07),
            0px 41.7776px 33.4221px rgba(0, 0, 0, 0.0503198),
            0px 22.3363px 17.869px rgba(0, 0, 0, 0.0417275),
            0px 12.5216px 10.0172px rgba(0, 0, 0, 0.035),
            0px 6.6501px 5.32008px rgba(0, 0, 0, 0.0282725),
            0px 2.76726px 2.21381px rgba(0, 0, 0, 0.0196802);
        }

        .form-floating {
        top: 40px;
        }

        .login-btn-submit {
        background-color: #056a31 !important;
        color: white;
        transform: translateY(10px);
        font-size: 14px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;

        position: absolute;
        width: 380px;
        height: 15%;
        left: -1px;
        right: 0px;
        bottom: 8px;
        clip: initial;
        font-weight: bold;
        }

        .btn:hover {
        background-color: rgba(13, 181, 18, 1) !important;
        color: white;
        }

        .footer {
        position: absolute;
        bottom: 0px;
        background-color: #07361b !important;
        color: rgba(255, 255, 255, 0.22);
        }

        .login-field:focus {
        border-color: #056a31;
        }

    </style>
</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <div class="global-container">
        <div class="card login-form">
            <form action="./login.php" method="post" class="login">
                <div class="form-floating mb-3">
                    <input type="text" name="uname" id="floatingInput" placeholder="Username" class="form-control">
                    <label for="uname">Username</label>
                </div>
                <div class="form-floating">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="floatingPassword" placeholder="Password" class="form-control">
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" name="login" value="Login" class="login-btn-submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>