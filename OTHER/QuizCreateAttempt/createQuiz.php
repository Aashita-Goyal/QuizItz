<?php

session_start();
require './db/dbconn.php';

$result = mysqli_query($con, "SELECT * FROM quiz3");

// if counter is not set, set to zero
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
}

// if button is pressed, increment counter
if (isset($_POST['button'])) {
    ++$_SESSION['counter'];
}

// reset counter
if (isset($_POST['reset'])) {
    $_SESSION['counter'] = 1;
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Create Quiz</title>
    <link rel="stylesheet" href="./Old/navbar_footer.css">
    <link rel="stylesheet" href="./Old/new.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.html">
                        <p class="text-light mt-2">Profile<i class="fa-solid fa-user p-2"></i></p>
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

    <!--Create Quiz-->
    <!--Branch, Topic, Keywords/Tags, Total no. of Questions-->

    <div class="create__quiz">
        <div class="quiz__create__heading">
            <div class="attempt__quiz__heading">Create a New Quiz</div>
        </div>
        <div class="quiz__details">
            <form method="post" action="../QuizCreateAttempt/scripts/createquizscript.php">
                <br /><br /><br />
                <label for="quizname">Quiz Name</label>
                <input type="text" id="quizname" name="quizname" placeholder="enter your quiz name"><br>
                <br />
                <label for="branch">Choose a Branch</label>
                <select id="branch" name="branch">
                    <!-- <option>select</option> -->
                    <option value="Computer Science and Information Technology">CS/IT</option>
                    <option value="Electronics">EC</option>
                    <option value="Electrical">EE/EI</option>
                    <option value="Mechatronics">MT</option>
                    <option value="Biotechnology">BT</option>
                    <option value="Chemical">CE</option>
                </select>
                <br /><br />
                <label for="topic">Quiz Topic</label>
                <input type="text" id="topic" name="topic" placeholder="enter your quiz topic"><br>
                <br />
                <label for="keywords">Keywords/Tags</label>
                <input type="text" id="topic" name="keywords" placeholder="enter keywords/tags related to topic"><br><br>
                <label for="totalQuestions">Total Questions</label>
                <input type="text" id="totalQuestions" name="totalQuestions" placeholder="total number of questions"><br>
                <br /><br />
                <button type="submit" class="btn btn-dark" name="startEntering">Start Entering Questions</button>
        </div>
    </div>
    </form>
    <br>
    <hr>
    <br>
    </div>

    <strong>
        <p id="quesno" class="text-center fs-2">Enter Quiz details</p>
    </strong>

    <?php
    if (mysqli_num_rows($result) > 0) {
                    
        $countid = 0;
        
        while ($row = mysqli_fetch_array($result)) {
          
          ++$countid;
        
        }
        echo "<div class='question__details'>";
        echo "<div class='question__details__info'>";
        echo "<strong><p class='text-start'>Quiz ID : </strong>$countid</p>";
        echo "</div>";
        echo "</div>";
  } else {
    echo "Quiz ID not found";
  } 
    ?>


    <div class="question__details">
        <div class="question__details__info">

            <form method='post' action='../QuizCreateAttempt/scripts/enterquestionscript.php'>
                <br>
                <br id='break' />
                <label for='questionNumber'>Question Number </label>

                <input type='text' id='questionNumber' name='questionNum' placeholder='question number' value='<?php echo $_SESSION['counter'] ?>'>


                <br><br>
                <label for='questionNumber'>Question</label>
                <input type='paragraph' id='questionDescription' name='question' placeholder='enter question here'>

                <br><br>
                <label for='snswerOption'>Option a</label>
                <input type='paragraph' id='optionA' name='optionA' placeholder='enter answer here'>
                <br><br>
                <label for='answerOption'>Option b</label>
                <input type='paragraph' id='optionB' name='optionB' placeholder='enter answer here'>
                <br><br>
                <label for='answerOption'>Option c</label>
                <input type='paragraph' id='optionC' name='optionC' placeholder='enter answer here'>
                <br><br>
                <label for='answerOption'>Option d</label>
                <input type='paragraph' id='optionD' name='optionD' placeholder='enter answer here'>
                <br><br>
                <label for='answer'>Choose correct option</label>
                <select id='Correctanswer' name='correct'>
                    <option value='optionA'>Option a</option>
                    <option value='optionB'>Option b</option>
                    <option value='optionC'>Option c</option>
                    <option value='optionD'>Option d</option>
                </select>


                <div class='quiz__button'>
                    <div class='quiz__start'>
                        <button type='submit' class='btn btn-dark' name='nextQuestion'>Submit This Question</button>
                    </div>
            </form>



    <?php
    if ($_SESSION["counter"] < $_SESSION["totalQues"]) {
        echo "<div class='question__details'>";
        echo "<div class='question__details__info'>";
        echo "<form method='POST' action='../QuizCreateAttempt/createQuiz.php#break'>";
        echo "<div class='quiz__button'>";
        echo "<div class='quiz__start'>";
        echo "<br  id='enterNewQuestion' >";
        echo "<input type='hidden' name='counter' value='<?php echo $_SESSION[counter];   ?>   ' />";
        echo "<input type='submit' name='button' class='btn btn-dark ms-5' value='Enter New Question'/>";
        echo " <br/>";
        echo "<br/>";
        echo " <br/>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='question__details'>";
        echo "<div class='question__details__info'>";
        echo "<form method='POST' action='../QuizCreateAttempt/createQuiz.php#createquiz'>";
        echo "<div class='quiz__button'>";
        echo "<div class='quiz__start'>";
        echo "<br  id='enterNewQuestion'>";
        echo "<input type='hidden' name='counter' value='<?php echo $_SESSION[counter];   ?>    ' />";
        echo "<input type='submit' name='reset' class='btn btn-dark ms-5' value='All Questions Succesfully Uploaded'/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>



   


            <br><br><br><br>
            <div class="quiz__button">
                <div class="quiz__start">
                    <a href='../QuizCreateAttempt/quizCoverPage.php'><button type='button' class='btn btn-dark' name='createQuiz' id="createquiz">Create Quiz!</button></a>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>

        </div>
    </div>
    </div>




    </div>
    <!--Footer-->
    <footer>
        <div class="container-fluid p-lg-3">
            <br />
            <h5 class="ps-2">Follow Us</h5>
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/facebook-new.png" class="icons" /></a>
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/instagram-new.png" class="icons" /></a>
            <a href=""><img src="https://img.icons8.com/fluency/144/000000/twitter.png" class="icons" /></a>
            <br>
            <p class="pt-lg-0">© 2022 QuizItz Inc</p>
        </div>

    </footer>
</body>

</html>