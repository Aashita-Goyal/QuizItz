<?php
session_start();

    require '../db/dbconn.php';

            $qnum = $_POST['quizid'];
            $ques = $_POST['quesid'];
            $ques = $_POST['qno'];
            $opta = $_POST['optionA'];
            $optb = $_POST['optionB'];
            $optc = $_POST['optionC'];
            $optd = $_POST['optionD'];
            $correct = $_POST['correct'];

   

if(isset($_POST['nextQuestion'])) 
{
    if(!empty($_POST['questionNum']) && !empty($_POST['question']) && !empty($_POST['optionA']) && 
       !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']) && 
       !empty($_POST['correct']))
       {
           $queryQuestion = "INSERT INTO `question3` (`qno`, `ques`, `a`, `b`, `c`, `d`, `correct`, `quizid`) 
                             VALUES ('$qnum', '$ques', '$opta', '$optb', '$optc', '$optd', '$correct', '$quizid')";
           $query_result_question = mysqli_query($con, $queryQuestion);
           
           if($query_result_question == true){ ?>
                 <script>window.alert("Question uploaded\nEnter next Question");
                 window.location.href = "http://localhost/QuizItz/OTHER/QuizCreateAttempt/createQuiz.php#enterNewQuestion";</script>
    <?php        }else{
                    die(mysqli_error($con));
                }
        } else {
            echo "All required fields not entered";
        }
    }

?>