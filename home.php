<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <?php include 'includes/head.php'; ?>
    
  </head>
  
  <body>
    
  <?php include 'includes/navbarLogin.php'; ?>
  <?php include 'includes/navbarLogout.php'; ?>

  <?php include 'includes/footer.php'; ?>

  </body>
</html>