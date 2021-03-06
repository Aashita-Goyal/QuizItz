<!DOCTYPE html>
<html>

<head>
  <title>Result Page</title>
  <link rel="stylesheet" href="./Old/navbar_footer.css">
  <link rel="stylesheet" href="./Old/new.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
          <a class="nav-link" href="index.html">
            <p class="text-light mt-2">Logout<i class="fa-solid fa-power-off p-2"></i></p>

            <!--<img src="https://img.icons8.com/ios/100/000000/shutdown--v1.png" class="icons" />-->
          </a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <!--Quiz Result-->

  <div class="attempt__quiz__container">
    <div class="attempt__quiz__heading me-15 pe-15" style="position: absolute; top:130px; right:220px;">
      <h2>Quiz Result</h2>
    </div>
    <div class="attempt__quiz__details">
      <br><br><br><br>
    <?php 
          // echo "<strong><p>Quiz ID :</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;$quizid </p>";
          
          // echo "<strong><p>Quiz ID :</strong>&nbsp;$row[quizid] </p>";
          // echo "<strong><p>Quiz Name :</strong>&nbsp;$row[quizname] </p>";
          // echo "<strong><p>Quiz Topic :</strong>&nbsp;$row[quiztopic] </p>";
          // echo "<strong><p>Quiz Tags : </strong>&nbsp;$row[keywords] </p>";
          // echo "<strong><p>Quiz Subject : </strong>&nbsp;$row[branch] </p>";
          // echo "<strong><p>Total Questions : </strong>&nbsp;$row[totalques] </p>";
        ?>
     <strong>
      <strong><p>Marks Obtained : </strong>&nbsp;15</p>
      <strong><p>Correct Answers : </strong>&nbsp;3</p>
      <strong><p>Incorrect Answers : </strong>&nbsp;2</p>
      <strong><p>Unattempted Questions : </strong>&nbsp;</p>
      <strong><p>Total Questions : </strong>&nbsp;5</p>
      <strong><p>Maximum Marks : </strong>&nbsp;20</p>
      <strong><p>Percentage obtained : </strong>&nbsp;</p>
      </strong>
    </div>
    <div class="quiz__start">
      <button type="button" class="btn btn-dark" style="position: absolute; top:600px; right:420px;">Reattempt !</button>
      <strong>
        <p class="pad" style="position: absolute; top:650px; right:470px;"><a href="./home.html">Go to home</a></p>
      </strong>
      <strong>
        <p style="position: absolute; top:680px; right:445px;"><a href="./topicPage.html">Choose another quiz</a></p>
      </strong>
    </div>
  </div>

  <!--Footer-->
  <br><br><br><br>
  <footer>
    <div class="container-fluid p-lg-3">
      <br />
      <h5 class="ps-2">Follow Us</h5>
      <!--<a href=""><img src="https://img.icons8.com/ios-glyphs/60/000000/facebook-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/50/000000/instagram-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png" class="icons"/></a>-->
      <a href=""><img src="https://img.icons8.com/fluency/144/000000/facebook-new.png" class="icons" /></a>
      <a href=""><img src="https://img.icons8.com/fluency/144/000000/instagram-new.png" class="icons" /></a>
      <a href=""><img src="https://img.icons8.com/fluency/144/000000/twitter.png" class="icons" /></a>
      <br>
      <p class="pt-lg-0">?? 2022 QuizItz Inc</p>
    </div>

  </footer>
</body>

</html>