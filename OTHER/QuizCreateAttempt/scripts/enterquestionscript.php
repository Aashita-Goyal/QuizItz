<?php
session_start();
// $qno=$_SESSION["qno"];

    require '../db/dbconn.php';

            $qnum = $_POST['questionNum'];
            $ques = $_POST['question'];
            $opta = $_POST['optionA'];
            $optb = $_POST['optionB'];
            $optc = $_POST['optionC'];
            $optd = $_POST['optionD'];
            $correct = $_POST['correct'];
            // $quesid = rand(4,1000);


            $quizName = $_SESSION["quizName"];
            $topic = $_SESSION["topic"];
            $keywords = $_SESSION["tags"];
            $branch = $_SESSION["subject"];
            $totalQuestions = $_SESSION["totalQues"];
            // $quizid_query = $_SESSION["quizid_query"];
            // $quizid_query = "SELECT MAX(quizid) FROM quiz3";
            // $quizid_query_result = mysqli_query($con, $quizid_query);
            // $quizid = (int)$quizid_query;
            // $_SESSION["quizid_query"]=$quizid;

            $countid = $_SESSION['countid'];
            // $qno = 0;
   

if(isset($_POST['nextQuestion'])) 
{
    if(!empty($_POST['questionNum']) && !empty($_POST['question']) && !empty($_POST['optionA']) && 
       !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']) && 
       !empty($_POST['correct']))
       {
           $queryQuestion = "INSERT INTO `question3` (`qno`, `ques`, `a`, `b`, `c`, `d`, `correct`, `quizid`) 
                             VALUES ('$qnum', '$ques', '$opta', '$optb', '$optc', '$optd', '$correct', '$countid')";
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