<?php
session_start();
require '../QuizCreateAttempt/db/dbconn.php';

$topic = $_SESSION["topic"];
$tags = $_SESSION["tags"];
$subject = $_SESSION["subject"];
$totalQues = $_SESSION["totalQues"];

$quiz_result = mysqli_query($con,"SELECT * FROM quiz3 WHERE quizid='" . $_GET['quizid'] . "'");
$row= mysqli_fetch_array($quiz_result);


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Attempt Quiz Page</title>
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

  <body class="attempt__quiz">
    
    <?php include '../../includes/navbarLogout.php'; ?>

    <!--Quiz Details-->
    <div class="attempt__quiz__container">
        <div class="attempt__quiz__heading">
            <h2>Quiz Details</h2>
        </div>
        <div class="attempt__quiz__details">

          
        <?php 
          // echo "<strong><p>Quiz ID :</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;$quizid </p>";
          echo "<strong><p>Quiz ID :</strong>&nbsp;$row[quizid] </p>";
          echo "<strong><p>Quiz Name :</strong>&nbsp;$row[quizname] </p>";
          echo "<strong><p>Quiz Topic :</strong>&nbsp;$row[quiztopic] </p>";
          echo "<strong><p>Quiz Tags : </strong>&nbsp;$row[keywords] </p>";
          echo "<strong><p>Quiz Subject : </strong>&nbsp;$row[branch] </p>";
          echo "<strong><p>Total Questions : </strong>&nbsp;$row[totalques] </p>";
        ?>

        
        
        </div>

        <?php
        $question_result = mysqli_query($con, "SELECT * FROM question3 WHERE quizid='" . $_GET['quizid'] . "'");
                  // if(mysqli_num_rows($quiz_result) > 0){
                  //   if (mysqli_num_rows($question_result) > 0) {
                    ?>
                            <?php
                            // $i = 0;
                            // while ($row = mysqli_fetch_array($quiz_result)) {
                              //  while($row_question = mysqli_fetch_array($question_result)){
                              $row_question = mysqli_fetch_array($question_result);
                            ?>
                            
                            <?php
                              //    $i++;
                              // }
                          // }
                            ?>
                    <?php
                  //   } else {
                  //       echo "No data foundin question table";
                  //   }
                  // }else{
                  //   echo "No data foundin question table";
                  // }
                    ?>


        <div class="quiz__start">
          <!-- IMPORTANT -displaying qno also in url
            <a href="./quizQuestion.php?quizid=
            <?php 
            // echo $row['quizid'];
            ?>
            &quesid=
            <?php 
            // echo $row_question['quesid'];
            ?>
            &qno=
            <?php 
            // echo $row_question['qno'];
            ?>
            "><button type="button" class="btn btn-dark">Start Quiz!</button></a> 
          -->
            <!-- <a href="./quizQuestion.php"><button type="button" class="btn btn-dark">Start Quiz!</button></a> -->

            <a href='./quizQuestion.php?quizid=<?php echo $row['quizid'];?>'><button type="button" class="btn btn-dark">Start Quiz!</button></a>
            <!-- &quesid=
            <?php 
            // echo $row_question['quesid'];
            ?>
            &qno=
            <?php 
            // echo $row_question['qno'];
            ?> 
            -->
            <strong><p class="pad"><a href="./home.html">Go to home</a></p></strong>
            
            <strong><p><a href="./topicPage.html">Choose another quiz</a></p></strong>
            <br />
            <br />
            <br />
            <strong><p><a href="">Other available quizzes for the same topic</a></p></strong>
        </div>
    </div>
    


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
    <?php include '../../includes/footer.php'; ?>
  </body>
</html>