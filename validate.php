<?php

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
//$pass_encrypt = password_hash($pass, PASSWORD_DEFAULT);
session_start();
$_SESSION['usuario'] = $user;

include('database.php');

$consult = "SELECT*FROM users where nombre='$user' and contraseña='$pass'";
$resultado = mysqli_query($conectDB, $consult);

$rows = mysqli_num_rows($resultado);

mysqli_free_result($resultado);
mysqli_close($conectDB);

if ($rows) {
    header("location:homepage.php");
} else {
    header("location:index.php?r=0");
}

?>
