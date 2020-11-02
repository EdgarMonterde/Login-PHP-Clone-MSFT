<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesión</title>
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
        <form action="validate.php" method="POST" class="login">
            <div>
                <img id="imgmsft" src="images/msft.png" />
                <h4>Iniciar sesión</h4>
                <label id="labeluser">Usuario:</label>
                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" />
                <small id="helpuser" class="form-text text-muted">Email o Usuario.</small>
                <label id="labelpass">Contraseña:</label>
                <input class="form-control" type="password" id="contraseña" name="contraseña"
                    placeholder="Contraseña" />
            </div>
            <a href="register.php">¿No tienes cuenta? ¡registrate!</a>

            <!--<input id="enviar" type="button" value="ENTRAR" />-->
            <button type="submit" class="btn btn-primary" id="enviar">ENTRAR</button>
            <div id="errorM" class="alert alert-danger d-none" role="alert">
                Tu contraseña o usuario son incorrectos
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='main.js'></script>


    <?php
    if (isset($_GET['r']) && $_GET['r'] == 0) {
    ?>
    <script>
    $(function() {

        $("#errorM").removeClass("d-none").animate({
            opacity: '1'
        }, 465);

        setTimeout(function() {
            $("#errorM").animate({
                opacity: '0'
            }, 465);
            setTimeout(function() {
                $("#errorM").addClass("d-none");
            }, 1000);
        }, 3500);

        /*$("#errorM").show().animate({opacity: '1'}, 465);
        $("#errorM").hide(3000);*/
        //$("#errorM").addClass("d-none").animate({opacity: '0'}, 465);
    });
    </script>
    <?php
    } //end if
    ?>
</body>

</html>