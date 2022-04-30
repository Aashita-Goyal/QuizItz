<!DOCTYPE html>
<html>
  <head>
    <title>Topic Page</title>
    <link rel="stylesheet" href="./Old/navbar_footer.css">
  <link rel="stylesheet" href="./Old/new.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous"
    />
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


    <!--topics carousal-->
    <section class="placement__carousal">

    </section>
    <!--topics list-->
    <section class="placement__list"><p class="text-warning bg-dark"><br />List Of Topics<br /><br /></p>
        <div class="topic__bar d-inline-flex">
            <div class="topic__name">Topic Name</div>
            <div class="topic__choices  d-inline-flex">
                <div class="topic__option__1"><a href=""><p class="text-dark">Attempt Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
                </div>
                <div class="topic__option__4"><a href=""><p class="text-dark">Create Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
                </div>
                <div class="topic__option__2"><a href=""><p class="text-dark">Read Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
                </div>
                <div class="topic__option__5"><a href=""><p class="text-dark">Upload Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
                </div>
                <div class="topic__option__3"><a href=""><p class="text-dark">Flashcard<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
                </div>
            </div>
        </div>

        <div class="topic__bar d-inline-flex">
          <div class="topic__name">Topic Name</div>
          <div class="topic__choices  d-inline-flex">
            <div class="topic__option__1"><a href=""><p class="text-dark">Attempt Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__4"><a href=""><p class="text-dark">Create Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__2"><a href=""><p class="text-dark">Read Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__5"><a href=""><p class="text-dark">Upload Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__3"><a href=""><p class="text-dark">Flashcard<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
          </div>
      </div>

      <div class="topic__bar d-inline-flex">
        <div class="topic__name">Topic Name</div>
        <div class="topic__choices  d-inline-flex">
            <div class="topic__option__1"><a href=""><p class="text-dark">Attempt Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__4"><a href=""><p class="text-dark">Create Quiz<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__2"><a href=""><p class="text-dark">Read Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__5"><a href=""><p class="text-dark">Upload Study Material<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
            <div class="topic__option__3"><a href=""><p class="text-dark">Flashcard<i class="fa-solid fa-arrow-right-from-bracket p-2"></i></p></a>
            </div>
        </div>
    </div>

    </section>


      <!--Add new topic-->

      <section class="container p-2 p-lg-3 p-md-2">
        <div class="topic__new">
            <h3 class="topic__new__heading">Add New Topic</h3>
            <div class="topic__new__form">
                <table>
                    <form method = "post" action = "topicPage.html"> <!--change values here-->
                        <tr>
                            <td>
                                <label> New topic name </label>
                            </td>
                            <td>
                                <input type = "text" name = "Name" size=54 placeholder="Add topic name here" /> 
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                <label> Keywords/tags </label>
                            </td>
                            <td>
                                <input type = "text" name = "email" size=54 placeholder="Enter keywords related to your topic here" /> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label> Action </label>
                            </td>
                            <td>
                                <select name = "class"> 
                                    <option value = "Create"> Create Quiz </option>
                                    <option value = "Upload"> Upload Study Material </option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 align="center">
                                <input type = "reset" name = "reset" value= "reset" />
                                <input type = "submit" name = "submit" value = "submit" /><br>
                            </td>
                        </tr>	
                    </form>
                </table>
            </div>
        </div>
    </section>
    

    <!--Topic search bar-->

    <div>
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <h4 class="topic__search">Search among existing topics</h4>
            <div class="input-group mb-3 shadow">
              <input
                type="text"
                class="form-control"
                placeholder="Search Topic"
                aria-label="Search task"
                aria-describedby="basic-addon2"
              />
              <span class="input-group-text" id="basic-addon2"
                ><i class="fas fa-search"></i
              ></span>
            </div>
          </div>
        </div

  

      <!--Footer-->
      <footer>
        <div class="container-fluid p-lg-3">
        <h5 class="ps-2">Follow Us</h5>
        <!--<a href=""><img src="https://img.icons8.com/ios-glyphs/60/000000/facebook-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/50/000000/instagram-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png" class="icons"/></a>-->
        <a href=""><img src="https://img.icons8.com/fluency/144/000000/facebook-new.png" class="icons"/></a>
                        <a href=""><img src="https://img.icons8.com/fluency/144/000000/instagram-new.png" class="icons"/></a>
                        <a href=""><img src="https://img.icons8.com/fluency/144/000000/twitter.png" class="icons"/></a>
        <br>
        <p class="pt-lg-0">© 2022 QuizItz Inc</p>
    </div>
        
</footer>
  </body>
</html>

