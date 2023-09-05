<?php 

   class homeController {
      private $MODEL;
      public function __construct()
      {
         include(__DIR__ . "/../model/home_model.php");
         $this->MODEL = new homeModel();
   
      } 

      public function guardarUsuario ($correo,$contrasena){
   
         // echo $correo;
         // echo $contrasena;
         $valor = $this->MODEL->aggreNuevoUsuario($this->limpiarEmail($correo), $this->encriptarPass($this->limpiarCadena($contrasena)));
         return $valor;

      }

      public function limpiarCadena ($campo){
         $campo = strip_tags($campo);
         $campo = filter_var($campo, FILTER_UNSAFE_RAW);
         $campo =  htmlspecialchars($campo);
         return $campo;
          
      }

      public function limpiarEmail ($campo){

         $campo = strip_tags($campo);
         $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
         $campo =  htmlspecialchars($campo);
         return $campo;
          
      }

      public function encriptarPass ($contrasena) {
         return password_hash($contrasena, PASSWORD_DEFAULT);
      }

      public function verificarUsuario ($correo, $contrasena) {
         $keydb = $this->MODEL->obtenerClave($correo);
         return (password_verify($contrasena,$keydb)) ? true : false;

      }
     } 


?>