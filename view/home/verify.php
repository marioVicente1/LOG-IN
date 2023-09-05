

<?php
include(__DIR__ . ("/../../contoller/home_controles.php"));

session_start();

$obj = new homeController();

$correo = $obj->limpiarEmail($_POST['mail']);

$contrasena = $obj->limpiarCadena($_POST['password']);

$bandera = $obj->verificarUsuario($correo, $contrasena);  

if ($bandera) {

   $_SESSION['usuario'] = $correo;
   header("Location:panel_control.php");
}else{
   $error = "<li> Las claves son incorrectas </li>";
   header("Location:login.php?error=".$error);
}




?>