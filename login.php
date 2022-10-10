<?php
    session_start();

    if (isset($_SESSION['usuario'])){
        header("location: perfil.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCodi</title>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>
    <div class="login">
        <img class="icono_usuario" src="images/logo_app_sin_fondo.png" alt="Icono usuario"/>
        <form method="POST" action="php/login_usuario.php" >
                
            <div class="titulo_formulario">
                <legend>Inicia sesión</legend>
            </div>
            <div class="cuerpo_formulario usuario">
                <label for="usuario">Usuario</label>
                <br/>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" required="true"/>
                <br/>
            </div>
            <div class="cuerpo_formulario contraseña">
                <label for="contraseña">Contraseña</label>
                <br/>
                <input type="password" id="contraseña" name="contraseña" placeholder="contraseña" required="true"/>
                <br/>
            </div>
            <input class="boton_enviar" type="submit" id="Enviar"/>
        </form>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>