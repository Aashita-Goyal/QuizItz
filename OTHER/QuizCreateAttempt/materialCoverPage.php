<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/styleTest.css">
    

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
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
      <div class="closeSide">
        <a href="javascript:void(0)" class="closebtn pb-3" onclick="closeNav()">Menu &times; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; </a>
        <!-- &times;  - X sign-->
      </div>
      <a href="#" class="toggleNav">Home</a>
      <a href="#" class="toggleNav">Branches</a>
      <a href="#" class="toggleNav">Create Quiz</a>
      <a href="#" class="toggleNav">Attempt Quiz</a>
      <a href="#" class="toggleNav">Placement Quiz</a>
      <a href="#" class="toggleNav">Read Study Material</a>
      <a href="#" class="toggleNav">Upload Study Material</a>
      <a href="#" class="toggleNav">Flashcards</a>
      <a href="#" class="toggleNav">Other Games</a>
      <a href="#" class="toggleNav">Profile</a>
      <a href="#" class="toggleNav">Login</a>
      <a href="#" class="toggleNav">About Us</a>
      <a href="#" class="toggleNav">Help</a>
      <a href="#" class="toggleNav">Contact</a>
    </div>
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; </span>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
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
            <p class="text-light mt-2 font-weight-bold">Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">
            <p class="text-light mt-2">About Us</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">
            <p class="text-light mt-2">Branches</p>
          </a>
        </li>
      </ul>
      <ul ul class="nav justify-content-end">
        <!--<li class="nav-item">
          <a class="nav-link" href="">
            <p class="text-light mt-2">Settings<i class="fa-solid fa-gear p-2"></i></p>
            <img src="https://img.icons8.com/small/128/000000/settings.png" class="icons" />
          </a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="profile.html">
            <p class="text-light mt-2">Profile<i class="fa-solid fa-user p-2"></i></p>

            <!--<img src="https://img.icons8.com/glyph-neue/64/000000/lifecycle.png" class="icons" />-->
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <p class="text-light mt-2">Login/Logout <i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p>

            <!--<img src="https://img.icons8.com/ios/100/000000/shutdown--v1.png" class="icons" />-->
          </a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

<section>
  <div><br /><br /><br /></div>
</section>

<br /> <br /> <br />

  <!-- <section> -->
 <header>
   <div>
   <div class="content">
     <div class="text-content">
       <div class="text">STUDY MATERIAL </div>
       <div class="name">STUDY HARD</div>
       <div class="material">
         <div class="material">
           <span> </span>
            <div class="typing-text">
              <span class="one">READY TO </span>
              <span class="two">SCORE.... </span>
            </div>
          </div>
       </div>
       <div class="buttons">
       <a href="#allQuiz"><button>Study material</button></a>
       <a href="./uploadStudyMaterial.php"><button>Upload material</button></a>
       <a href="./branchPage.php"><button>Topic List</button></a>
 </div>

     </div>
     <div class="girl">
        <img src="./assets/Images/collage.png">
        <!-- <img src="../../assets/Images/collage.png"> -->
      </div>
      
   </div>

 </header>
<!-- </section> -->

<!-- <section> -->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<section>
<br /><br />
  <div class="all_quiz_list" id="allQuiz" >
      <h2 style="text-align: center;">List of All Study Material Available</h2>
      <p>Calling list of all study material here</p>
  </div>
</section>
  <!--Footer-->
  <footer>
    <br /> <br /> <br /> <br /> <br /> <br /> <br />
    <br /> <br /> <br /> <br /> <br /> <br /> <br />
    <div class="container-fluid p-lg-3">
      <h5 class="ps-2 mt-5">Follow Us</h5>
      <a href="" class="icons"><i class="fa-brands fa-facebook-f" style="color: white"></i></a>
      <a href="" class="icons"><i class="fa-brands fa-instagram" style="color: white"></i></a>
      <a href="" class="icons"><i class="fa-brands fa-twitter" style="color: white"></i></a>
      <br>
      <br>
      <p class="pt-lg-0">© 2022 QuizItz Inc</p>
    </div>
  </footer>
</section>

  


</body>
</html>
