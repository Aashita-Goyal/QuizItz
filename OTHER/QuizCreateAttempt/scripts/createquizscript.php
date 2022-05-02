<?php
session_start();

    require '../db/dbconn.php';
            $branch = $_POST['branch'];
            $topic = $_POST['topic'];
            $keywords = $_POST['keywords'];
            $totalQuestions = $_POST['totalQuestions'];
            // $quizid = rand(4,1000);
            $quizName = $_POST['quizname'];
            $startEntering = $_POST['startEntering'];

            $_SESSION["quizName"] = $quizName;
            $_SESSION["topic"]=$topic;
            $_SESSION["tags"]=$keywords;
            $_SESSION["subject"]=$branch;
            $_SESSION["totalQues"]=$totalQuestions;
            // $_SESSION["qno"]=$qno;

            // $quizid_query = "SELECT MAX(quizid) FROM quiz3";
            // $quizid = (int)$quizid_query;
            // $_SESSION["quizid_query"]=$quizid;
            

     if(isset($_POST['startEntering'])) 
     {
         if(!empty($_POST['topic']) && !empty($_POST['totalQuestions']) && !empty($_POST['quizname'])){
    
            
            $query = "INSERT INTO `quiz3` (`quizname`, `branch`, `quiztopic`, `keywords`, `totalques`) VALUES ('$quizName', '$branch', '$topic', '$keywords', '$totalQuestions')";

            
            $query_result = mysqli_query($con, $query);

            if($query_result == true){ 
            ?>
                <script>window.alert("Quiz Data Entered! \nPlease enter the Question details now");
                 window.location.href = "http://localhost/QuizItz/OTHER/QuizCreateAttempt/createQuiz.php#break";</script>
            <?php

        }else{
            die(mysqli_error($con));
        }

        } else {
            echo "All required fields not entered";
        }


}





            //generate random number for quiz id
            //call values of quiz id and total ques in table of quiz question
            ?>



            