<?php
    include 'conexion_bd.php';

    $cargo = $_POST ['cargo'];
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $cedula = $_POST ['cedula'];
    $usuario = $_POST ['usuario'];
    $correo = $_POST ['correo'];
    $telefono = $_POST ['telefono'];
    $direccion = $_POST ['direccion'];
    $barrio = $_POST ['barrio'];
    $contraseña = $_POST ['contraseña'];

    // Encriptar contraseña
    $contraseñaEncrip = hash('sha512', $contraseña);

    // Insertar datos Base de datos
    $query = "INSERT INTO trabajadores(cargo,nombres,apellidos,cedula,usuario,telefono,correo,direccion,barrio,contraseña) 
                VALUES('$cargo','$nombre','$apellido','$cedula','$usuario','$telefono','$correo','$direccion','$barrio','$contraseñaEncrip')";
    
        // Verificar correos y usuarios repetidos en la base de datos
        $consulta = ("SELECT * FROM trabajadores WHERE correo = '$correo'");
        $verificacion = mysqli_query($conexion, $consulta);
    
        if (mysqli_num_rows($verificacion) > 0){
            echo '
                <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../registro.html";
                </script>
            ';
            exit();
        }

        $consulta = ("SELECT * FROM trabajadores WHERE usuario = '$usuario'");
        $verificacion = mysqli_query($conexion, $consulta);
    
        if (mysqli_num_rows($verificacion) > 0){
            echo '
                <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../registro.html";
                </script>
            ';
            exit();
        }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "
        <script>
            alert('Usuario creado exitosamente');
            window.location = '../login.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Error al crear usuario, intentalo de nuevo');
            window.location = '../registro.html';
        </script>
        ";
    }
    mysqli_close($conexion);

?>