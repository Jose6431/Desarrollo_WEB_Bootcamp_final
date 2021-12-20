<?php
require_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title><link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="<?=APP_URL?>assets/css/brands.min.css">
    <link rel="stylesheet" href="<?=APP_URL?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=APP_URL?>assets/css/app.css">
    <style>
        


    </style>

</head>
<body class="login_page">
    <div></div>
    <div class="form-login">
        <img class="blog_logo" src="<?=APP_URL?>assets/img/logo2.png" alt="logo de mi blog" width="250px">

        <h2> FORMULARIO DE ACCESO</h2>

        <form action="<?= APP_URL?>app/autenticar.php" method="post">
            <input type="hidden" name="operacion" value="login">
            <label for="">
                USUARIO
            </label>
            <input name="usr" id="usr" type="">
    
            <label for="">
                CONTRASEÑA
    
            </label>
            <input name="pwd" id="pwd" type="text">
            <br>
            <button type="submit">
                <i class="fas fa-sign-in-alt"></i>
                Ingresar
            </button>

    
        </form>
    </div>
    <div></div>

</body>
</html>