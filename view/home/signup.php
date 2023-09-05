
<?php include('../head/head.php'); 

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
      Create an account in Dogcom
   </div>
   <form action="store.php" method="POST" class="login col-sm-8 col-md-6 col-lg-3" autocomplete="off">
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="mail" value="<?= (!empty($_GET['mail'])) ? $_GET['mail']: " " ?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <div class="box_eye">
            <button type="button" x> 
               <i id="eye_password"  class="fa-solid fa-eye chancePass"></i> 
            </button>
         </div>
         <input type="password" name="password" value="<?=(!empty($_GET['password'])) ?$_GET['password'] : ""?>"   class="form-control" id="password">
      </div>

      <div class="mb-3 ">
         <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
         <div class="box_eye" >
            <button type="button" x> 
               <i id="eye_password2"  class="fa-solid fa-eye chancePass"></i> 
            </button>
         </div>
         <input type="password" name="rePassword" value="<?=(!empty($_GET['rePassword'])) ? $_GET['rePassword']:""?>" class="form-control" id="password2">
      </div>
       <?php if(!empty($_GET['error'])):?>
         <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
            <?= !empty($_GET['error']) ? $_GET['error']: ""; ?>
         </div>
         
         <?php endif;?>

      <div class="d-grid gap-2">
         <button type="submit" class="btn btn-primary">Create count</button>
      </div>

   </form>
   <div class="login mt-3 col-sm-8 col-md-6 col-lg-3">
      <p> You have an account?<a href="login.php" style="text-decoration: none;"> Log in </a></p>
   </div>
</div>


<?php include('../head/footer.php') ?>