<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/panel.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

    <?php require ("templates/header.php") ?>

    <?php require ("templates/nav.php") ?>
    <h1>Registro Trabajador</h1>
    <form action="php/registro_trabajador.php" method="POST" autocomplete="off">
        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" id="cargo" placeholder="Escribir Cargo" required="true"/><br/>

        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" id="nombre" placeholder="Escribir Nombres" required="true"/><br/>
        
        <label for="apellido">Apellidos</label>
        <input type="text" name="apellido" id="apellido" placeholder="Escribir Apellidos" required="true"/><br/>

        <label for="cedula">Cedula</label>
        <input type="number" name="cedula" id="cedula" placeholder="cedula" required="true"/><br/>

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required="true"/><br/>

        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" placeholder="Escribir Correo"/><br/>

        <label for="telefono"> Telefono</label>
        <input type="number" name="telefono" id="telefono" placeholder="telefono" required="true"/></br>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" placeholder="Direccion" required="true"/></br>

        <label for="barrio">Barrio</label>
        <input type="text" name="barrio" id="barrio" placeholder="barrio" required="true"/></br>

        <lable for="contraseña">Contraseña</lable>
        <input type="password" name="contraseña" id="Contraseña" required="true"/></br>

        <input class="boton_registrar" type="submit" id="Registrar" value="Registrar"/>
    </form>
    <script src="assets/js/panel.js"></script>
</body>
</html>