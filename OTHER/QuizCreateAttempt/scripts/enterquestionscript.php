<?php


    require '../db/dbconn.php';

            $qnum = $_POST['questionNum'];
            $ques = $_POST['question'];
            $opta = $_POST['optionA'];
            $optb = $_POST['optionB'];
            $optc = $_POST['optionC'];
            $optd = $_POST['optionD'];
            $correct = $_POST['correct'];
            $quesid = rand(4,1000);
            


            

if(isset($_POST['nextQuestion'])) 
{
           $queryQuestion = "INSERT INTO `question2` (`quesid`, `qno`, `ques`, `a`, `b`, `c`, `d`, `correct`) 
                             VALUES ('$quesid', '$qnum', '$ques', '$opta', '$optb', '$optc', '$optd', '$correct')";
           $query_result_question = mysqli_query($con, $queryQuestion);
           
           if($query_result_question == true){ ?>
                 <script>window.alert("Question uploaded\nEnter next Question");
                 window.location.href = "http://localhost/QuizItz/OTHER//QuizCreateAttempt/createQuiz.php#break";</script>
    <?php        } else {
                die(mysqli_error($con));
            }
}

    
    ?>