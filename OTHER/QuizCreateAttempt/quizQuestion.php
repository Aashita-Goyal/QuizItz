<?php
session_start();
require '../QuizCreateAttempt/db/dbconn.php';

$quiz_result = mysqli_query($con,"SELECT * FROM quiz3 WHERE quizid='" . $_GET['quizid'] . "'");
$row= mysqli_fetch_array($quiz_result);

$question_result = mysqli_query($con, "SELECT * FROM question3 WHERE quizid='" . $_GET['quizid'] . "'");
// $row_question = mysqli_fetch_array($question_result);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Quiz Page</title>
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

<body class="quiz__question__body">
    <!--Navbar-->
    <!--PLEASE DO NOT REPLACE NAVBAR OF THIS PAGE WITH NAVBAR-->
    <nav class="navbar fixed-top navbar-expand-md bg-gradient-secondary" id="grad" class="navbar_fixed">
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
    <div class="quiz-container">
        <div class="quiz-header">

        <?php
            if (mysqli_num_rows($question_result) > 0) {
        
            $i = 0;
            while($row_question = mysqli_fetch_array($question_result)){
        ?>

            <h2>Q<?php echo $row_question['qno'] ?>. &nbsp;<?php echo $row_question['ques'] ?></h2>
            <div class="answer__options pb-3 mb-5">
            <div class="option__one__three">
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text"><?php echo $row_question['a'] ?></label>
                </li>
                <li>
                    <input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text"><?php echo $row_question['b'] ?></label>
                </li>
            </ul>
        </div>

            <div class="option__two__four">
            <ul>
                <li>
                    <input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text"><?php echo $row_question['c'] ?></label>
                </li>
                <li>
                    <input type="radio" name="answer" id="d" class="answer">
                    <label for="d" id="d_text"><?php echo $row_question['d'] ?></label>
                </li>
            </ul>
        </div>
        </div>
        </div>
        <?php
            $i++;
            // ++$_GET['quizid'];
            }
        } else {
                echo "No questions available";
        }
        ?>
        <button id="submit">Submit</button>
    </div>
    <!--Footer-->
    <footer>
        <div class="container-fluid p-lg-3">
            <br>
            <h5 class="ps-2">Follow Us</h5>
            <!--<a href=""><img src="https://img.icons8.com/ios-glyphs/60/000000/facebook-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/50/000000/instagram-new.png" class="icons"/></a>
        <a href=""><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png" class="icons"/></a>-->
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/facebook-new.png" class="icons" /></a>
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/instagram-new.png" class="icons" /></a>
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/twitter.png" class="icons" /></a>
            <br>
            <p class="pt-lg-0">© 2022 QuizItz Inc</p>
        </div>

    </footer>
</body>

</html>