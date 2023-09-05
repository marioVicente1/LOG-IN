

<?php
   class db{
      private $host = 'localhost';
      private $dbname = "login"; 
      private $user = 'mario';
      private $password = 'mario';
      public function conexion(){
         try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);

            return $PDO;

         } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
         }
   }
}

?>
