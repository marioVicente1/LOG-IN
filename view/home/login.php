
<?php include( __DIR__.'/../head/head.php');

if(!empty($_SESSION['usuario'])){
   header('Location:panel_control.php');
}
?>



<div class="fondo_login">
   <div class="icon">
      <a href="/login/index.php">
         <i class="fa-solid fa-shield-dog fa-beat  dog-icon"></i>
      </a>
   </div>
   <div class="titulo">
      Inicia sesion en Dogcom
   </div>
   <form action="verify.php" method="POST" class="col-sm-8 col-md-6 col-lg-3 login" autocomplete="off">
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <div class="box_eye " >
            <button type="button" > 
               <i id="eye_password" class="fa-solid fa-eye chancePass  box_eye d-flex align-items-center" ></i> 
            </button>
         </div>
         <input type="password" name="password" class="form-control" id="password">
      </div>

      <?php if(!empty($_GET['error'])):?>
         <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
            <?= !empty($_GET['error']) ? $_GET['error']: ""; ?>
         </div>
         <?php endif;?>

      <div class="d-grid gap-2">
   
         <button type="submit" class="btn btn-primary">Login</button>
      </div>

   </form>
   <div class="login col-sm-8 col-md-6 col-lg-3  mt-3">
      <p>New in Dogcom ? <a href="signup.php" style="text-decoration: none;"> Sing up</a>
   </div>
</div>

<?php include( __DIR__.'/../head/footer.php');