<?php include(__DIR__ . ("/../../view/head/head.php"))?>

<?php include(__DIR__ . ("/../../view/head/header.php"));
if(empty($_SESSION['usuario'])){
   header('Location:login.php');
}?>


<h1 class="text-center mt-4">Bienvenido  <?= $_SESSION['usuario']?> </h1>



<?php include(__DIR__ . ("/../../view/head/footer.php.php"));?>