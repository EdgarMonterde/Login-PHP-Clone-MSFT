<?php

require 'database.php';

if (!empty($_POST)) {
    $user = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    $pass_encrypt = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (nombre, contraseña) VALUES ('$user', '$pass_encrypt')";
    $captcha = $_POST['g-recaptcha-response'];

    $secretKey = '';

    if (!$captcha) {

        header("Location: register.php?ec=0");
    } else {
        $result = mysqli_query($conectDB, $sql);

        if ($result) {
            header("Location: confirmRegister.php");
        } else {
            echo "Error :";
        }
    }
}
