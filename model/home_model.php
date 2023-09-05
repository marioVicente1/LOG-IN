


<?php

class homeModel {
   private $PDO;
   public function __construct()
   {
    
      include( __DIR__."/../config/db.php");
      $pdo = new db();
      $this->PDO = $pdo->conexion();
      

   }

   public function aggreNuevoUsuario ($correo, $password) {
      $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo, :password)");
      $statement->bindParam(":correo", $correo);
      $statement->bindParam(":password",$password);

      try {
      $statement->execute();
      return true;
   }catch (PDOException $e) {
         return false;
         //throw $th;
      }
    // return ($statement->execute()) ? true : false ;
   }

   public function obtenerClave ($correo){
      $statement = $this->PDO->prepare('SELECT password FROM usuarios WHERE correo = :correo');
      $statement->bindParam(":correo", $correo);
      return ($statement->execute()) ? $statement->fetch()['password'] : false;
   }
} 





?> 