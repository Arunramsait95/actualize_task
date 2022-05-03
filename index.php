<?php
    include_once('server.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Login | Smart Bazaar Management</title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <link rel="icon" href="" type="image/x-icon"/>
      <!-- assets/img/icon.ico -->
      <!-- CSS Files -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   </head>
   <body>
      <div class="container go-register">
      <!-- Login Form Starts -->
      <div class="form__container form__container-login">
         <form action="" class="form" method="POST">
            <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-danger">
               <p><?php 
                  echo $_SESSION['message']; 
                  unset($_SESSION['message']);
                  ?></p>
            </div>
            <?php endif ?>
            <h3 class="form__heading">Login</h3>
            <div class="field">
               <input type="text" name="email" required autocomplete="off"  value="">
               <label for="email" title="Email" ></label>
            </div>
            <div class="field">
               <input type="password" name="password" required autocomplete="off" id="password">
               <label for="password" title="Password" data-title="Password"></label>
            </div>
            <p class="form__text">Forgot your password?</p>
            <!-- <a class="btn btn--main" style="color:#fff;">Sign In</a> -->
            <button type="submit" class="btn btn--main" name="login">Sign In</button>
         </form>
      </div>
      <!-- Login Form Ends -->
      <!-- Overlay container Starts -->
      <div class="overlay-container">
         <!-- Right Overlay Starts -->
         <div class="overlay overlay--right">
            <img src="assets/img/login.png" width="108px">
         </div>
         <!-- Right Overlay Ends -->
      </div>
      <!-- Overlay Container Ends -->
   </body>
</html>