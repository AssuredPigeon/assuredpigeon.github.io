<?php

session_start();

include "conexion-be.php";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login= mysqli_query($conexion, "SELECT *  FROM usuarios WHERE correo = '$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
	$_SESSION['usuario'] = $correo;
	header("location: ../index.php");
	exit;
}else
echo "
<script>
alert('El usuario no existe');
window.location = 'login-registro.php';
</script>
";
exit;

?>