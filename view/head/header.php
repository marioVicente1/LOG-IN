

<?php include('./head.php');

?>

<div class="fondo_menu"></div>
   <div class="contianer-fluid">
      <nav class="navbar navbar-expand-xxl navbar-dark bg-dark ">
         <div class="container-fluid">
                  <a class="navbar-brand a_nav" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <?php if(empty($_SESSION['usuario'])): ?>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto  mb-lg-0   ul_nav">
                     <li class="nav-item li_nav">
                        <a class="nav-link active a_nav mb-2" aria-current="page" href="#">Produts<a>
                     </li>
                     <li class="nav-item li_nav ">
                        <a class="nav-link a_nav mb-2" href="#">Solutions</a>
                     </li>
                     <li class="nav-item li_nav " >
                        <a class="nav-link a_nav mb-2" href="#">Contac us</a>
                     </li>
                  </ul>
                  <a   href="~/../view/home/login.php" class="boton a_nav nav-link mb-2">Sign in</a>
                  <a href="~/../view/home/signup.php"class="boton a_nav nav-link  mb-2">Sign up</a>
               </div>

            <?php else: ?>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0   ul_nav">
                     <li class="nav-item li_nav">
                        <a class="nav-link active a_nav mb" aria-current="page" href="#">Add information<a>
                     </li>
                     <li class="nav-item li_nav">
                        <a class="nav-link a_nav" href="#">Edit perfil</a>
                     </li>
                     <li class="nav-item li_nav">
                        <a class="nav-link a_nav mb-3" href="#">Resources</a>
                     </li>
                  </ul>
                  <a   href="../home/logout.php" class="boton a_nav nav-link" >Log Out</a>
               </div>
            <?php endif ?>
         </div>
      </nav>
   </div>
</div>

<div class="fondo">



