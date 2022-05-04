<?php
session_start();

    require '../db/dbconn.php';

            // $quizid = $_POST['quizid'];
            // $quesid = $_POST['quesid'];
            // $qno = $_POST['qno'];
            $userAnswer = $_POST['answer'];
            // $correct = $_POST['correct'];
            // $correctAnswer = $_SESSION["correctAnswer"];
            $quizid = $_SESSION['attemptingQuestionQuizId'];

            $answer_result = mysqli_query($con, "SELECT * FROM question3 WHERE quizid=$quizid");
            $row_answer = mysqli_fetch_array($answer_result);
            $quesid = $row_answer['quesid'];
            $qno = $row_answer['qno']; 
            $correct = $row_answer['correct']; 



   

if(isset($_POST['submitAnswer'])) 
{
    if(!empty($quizid) && !empty($quesid) && !empty($qno) && !empty($userAnswer))
       {
        if (mysqli_num_rows($answer_result) > 0) {

           $queryAnswer = "INSERT INTO `answer` (`quizid`, `quesid`, `qno`, `answeroption`, `correctanswer`) 
                             VALUES ('$quizid', '$quesid', '$qno', '$userAnswer', '$correct')";
           $query_answer_submit = mysqli_query($con, $queryAnswer);

        // $answer_submit = mysqli_query($con, "SELECT * FROM question3 WHERE quizid=$quizid");
        // $row_answer = mysqli_fetch_array($answer_submit);
           
           if($query_answer_submit== true){ ?>

                 <script>
                var quizidJ = '<?php echo $quizid; ?>';
                var quesidJ = '<?php echo $quesid; ?>';
                var qnoJ = '<?php echo $qno; ?>';
                 window.alert("Your response has been received\nPlease proceed");
                 window.location.href = "http://localhost/QuizItz/OTHER/QuizCreateAttempt/quizQuestion.php?quizid="+quizidJ+"&quesid="+quesidJ+"&qno="+qnoJ+""</script>
    <?php        }else{
                    die(mysqli_error($con));
                }
        } else {
                echo "No questions available";
        }
    } else if(empty($userAnswer)){
        echo "\nPlease SUBMIT your question first\nPlease press back";
    }
    else {
            echo "All required fields not entered";
            

        }
    }

    

?>