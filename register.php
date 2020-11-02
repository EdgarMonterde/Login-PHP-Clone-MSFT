<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="father">
        <div class="imagexbox">
            <img id="xblimg" src="images/xb.png" />
        </div>
        <form action="registervalidation.php" method="POST" class="register">
            <div>
                <img id="imgmsft" src="images/msft.png" />
                <h4>REGISTRO</h4>
                <label id="labeluser">Usuario:</label>
                <input class="form-control" type="text" id="usuario" name="usuario"
                    placeholder="Ingresa tu correo o usuario" />
                <small id="helpuser" class="form-text text-muted">Email o Usuario.</small>
                <label id="labelpass">Contraseña:</label>
                <input class="form-control" type="password" id="contraseña" name="contraseña"
                    placeholder="Ingresa tu contraseña" />
            </div>
            <a href="index.php">¿Ya tienes cuenta? ¡Logeate!</a>

            <!--<input id="enviar" type="button" value="ENTRAR" />-->
            <button type="submit" class="btn btn-primary" id="enviar">REGISTRAR</button>
            <div id="captcha" class="g-recaptcha" data-sitekey=" "></div>
            <div id="errorcaptcha" class="alert alert-danger d-none" role="alert">
                <h5>Error de validación</h5>
                <p>Por favor, verifique los campos obligatorios o campos validos.</p>
            </div>
        </form>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='main.js'></script>

    <?php
    if (isset($_GET['ec']) && $_GET['ec'] == 0) {
    ?>
    <script>
    $(function() {

        $("#errorcaptcha").removeClass("d-none").animate({
            opacity: '1'
        }, 465);

        setTimeout(function() {
            $("#errorcaptcha").animate({
                opacity: '0'
            }, 465);
            setTimeout(function() {
                $("#errorcaptcha").addClass("d-none");
            }, 1000);
        }, 3500);
    });
    </script>
    <?php
    } //end if
    ?>

</body>

</html>