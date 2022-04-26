<?php
 session_start();
 $qno = $_SESSION["var"];
//  while($qno <= $_SESSION["var"]){}
// $totalQuestionsEntered=$_SESSION["var"];

    require '../db/dbconn.php';

            $ques = $_POST['question'];
            $opta = $_POST['optionA'];
            $optb = $_POST['optionB'];
            $optc = $_POST['optionC'];
            $optd = $_POST['optionD'];
            $correct = $_POST['correct'];
           // $qno = $_POST['questionNumber'];


            

if(isset($_POST['nextQuestion'])) 
{
           $queryQuestion = "INSERT INTO `question2` (`qno`, `ques`, `a`, `b`, `c`, `d`, `correct`) 
                             VALUES ('$qno', '$ques', '$opta', '$optb', '$optc', '$optd', '$correct')";
           $query_result_question = mysqli_query($con, $queryQuestion);
           
           if($query_result_question == true){ ?>
                 <script>window.alert("Question uploaded\nEnter next Question");
                 window.location.href = "http://localhost/QuizItz/createQuiz.php#break";</script>
    <?php        } else {
                die(mysqli_error($con));
            }
}

    
    ?>