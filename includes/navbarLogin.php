<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <?php include 'includes/head.php'; ?>
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-md bg-gradient-secondary" id="grad">
    <div class="padLogo padLogo-light ps-4"></div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Home</a>
      <a href="#">Subjects</a>
      <a href="#">Create</a>
      <a href="#">Attempt</a>
      <a href="#">Profile</a>
      <a href="#">About Us</a>
      <a href="#">Help</a>
      <a href="#">Contact</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; </span>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>


    <div class="container">
      <a class="navbar-brand pe-sm-3" href="home.html">
        <h3 class="logo">QuizItz</h3>
      </a>
      <ul class="nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.html">
            <p class="text-light mt-2">Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">
            <p class="text-light mt-2">About Us</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">
            <p class="text-light mt-2">Contact</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <p class="text-light mt-2">Help</p>
          </a>
        </li>
      </ul>
      <ul ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="">
            <p class="text-light mt-2">Settings<i class="fa-solid fa-gear p-2"></i></p>
            <!--<img src="https://img.icons8.com/small/128/000000/settings.png" class="icons" />-->
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.html">
            <p class="text-light mt-2">Profile<i class="fa-solid fa-user p-2"></i></p>

            <!--<img src="https://img.icons8.com/glyph-neue/64/000000/lifecycle.png" class="icons" />-->
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <p class="text-light mt-2">Login<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p>

            <!--<img src="https://img.icons8.com/ios/100/000000/shutdown--v1.png" class="icons" />-->
          </a>
        </li>
      </ul>
    </div>
    </div>
  </nav>


  <!--Footer-->
  <footer>
    <div class="container-fluid p-lg-3">
      <h5 class="ps-2">Follow Us</h5>
      <a href=""><img src="https://img.icons8.com/ios-glyphs/60/000000/facebook-new.png" class="icons" /></a>
      <a href=""><img src="https://img.icons8.com/ios-glyphs/50/000000/instagram-new.png" class="icons" /></a>
      <a href=""><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png" class="icons" /></a>
      <br>
      <p class="pt-lg-0">© 2022 QuizItz Inc</p>
    </div>
  </footer>



</body>

</html>