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
  <?php include 'includes/navbarLogout.php'; ?>
    
  <div class="home-intro">
    <h1>A Web Developer</h1>
    <p>I am a web developer and I love to create websites.</p>
    <button>Learn More</button>
  </div>

  <?php include 'includes/footer.php'; ?>
  </body>

</html>