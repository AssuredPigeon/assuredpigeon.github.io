<?php

include 'conexion-be.php';

$nada = '';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);
//ocultar contrasena 
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificar que el correo nose repita en la bd
$verificar_correo = mysqli_query($conexion, "SELECT * FRoM usuarios WHERE correo = '$null' ");
$verificar_nombre_completo = mysqli_query($conexion, "SELECT * FRoM usuarios WHERE nombre_completo = '$null' ");
$verificar_contrasena = mysqli_query($conexion, "SELECT * FRoM usuarios WHERE contrasena = '$null' ");
$verificar_usuario = mysqli_query($conexion, "SELECT * FRoM usuarios WHERE usuario = '$null' ");
$verificar_correo2 = mysqli_query($conexion, "SELECT * FRoM usuarios WHERE correo = '$null' ");


if(mysqli_num_rows($verificar_nombre_completo) > 0){
    echo "
    <script>
    alert('Ingrese un nombre');
    window.location = 'login-registro.php';
    </script>
    ";
    exit(); 
}

if(mysqli_num_rows($verificar_contrasena) > 0){
    echo "
    <script>
    alert('Ingrese una clave');
    window.location = 'login-registro.php';
    </script>
    ";
    exit(); 
}

if(mysqli_num_rows($verificar_usuario) > 0){
    echo "
    <script>
    alert('Ingrese un usuario');
    window.location = 'login-registro.php';
    </script>
    ";
    exit(); 
}

if(mysqli_num_rows($verificar_correo2) > 0){
    echo "
    <script>
    alert('Ingrese un correo');
    window.location = 'login-registro.php';
    </script>
    ";
    exit(); 
}

if(mysqli_num_rows($verificar_correo) > 0){
    echo "
    <script>
    alert('Este correo ya esta en uso');
    window.location = 'login-registro.php';
    </script>
    ";
    exit(); 
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado correctamente");
    window.location = "login-registro.php";
    </script>';
}else{
        echo '
    <script>
    alert("Intentelo de nuevo");
    window.location = "login-registro.php";
    </script>';

}



mysqli_close($conexion);

?>