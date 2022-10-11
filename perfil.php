<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion primero");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="css/perfil.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>Sistema de control de inventario</h1>
    </header>
    <nav>
        <ul>
            <li><a href="registro.html">Registro</a></li>
            <li><a href="php/cerrar_sesion.php">Cerrar sesion</a></li>
        </ul>
    </nav>
</body>
</html>