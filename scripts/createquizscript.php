<?php
    require '../db/dbconn.php';
            $branch = $_POST['branch'];
            $topic = $_POST['topic'];
            $keywords = $_POST['keywords'];
            $totalQuestions = $_POST['totalQuestions'];
            $quizid = rand(4,500);


     if(isset($_POST['startEntering'])) 
     {
         if(!empty($_POST['topic']) && !empty($_POST['totalQuestions'])){
    
            
            $query = "INSERT INTO `quiz` (`quizid`, `branch`, `quiztopic`, `keywords`, `totalques`) VALUES ('$quizid', '$branch', '$topic', '$keywords', '$totalQuestions')";

            
            $query_result = mysqli_query($con, $query);

            if($query_result == true){ 
            ?>
                <script>window.alert("Quiz Data Entered! \nPlease enter the Question details now");
                window.location.href = "http://localhost/QuizItz/createQuiz.php#quesno";</script>
            <?php

            } else {
                die(mysqli_error($con));
            }

        } else {
            echo "All required fields not entered";
        }


}





            //generate random number for quiz id
            //call values of quiz id and total ques in table of quiz question
            ?>



            