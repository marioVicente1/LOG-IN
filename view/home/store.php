<?php



   include( __DIR__ . '/../../contoller/home_controles.php');

   $obj = new homeController();

   $correo = $_POST['mail'];
   $contrasena = $_POST['password'];
   $confirContrasena = $_POST['rePassword'];
   $error ="";
   if (empty($correo)||empty($contrasena)|| empty($confirContrasena)) {
      $error .= "<li>Completa los campos</li>";
      header("Location:signup.php?error=".$error."&&mail=".$correo."&&password=".$contrasena."&&rePassword=".$confirContrasena);

   } else if ($correo && $contrasena && $confirContrasena) {
      if ($contrasena == $confirContrasena) { 
         if($obj->guardarUsuario($correo,$contrasena)== false){
            $error .= "<li> El correo ya esta registrado </li> ";
            header("Location:signup.php?error=".$error."&&mail=".$correo."&&password=".$contrasena."&&rePassword=".$confirContrasena);
         } else{
            header("Location:login.php");
            
         }

      } else{
         $error .= "<li>Las contraseñas son diferentes </li>";
         header("Location:signup.php?error=".$error."&&mail=".$correo."&&password=".$contrasena."&&rePassword=".$confirContrasena);

      }


   }

?>