<?php
    require '../db/dbconn.php';

    // $qid = $_POST['questionID'];
    // $qno = $_POST['email'];
    // $password = $_POST['password'];
    // $confirmpassword = $_POST['confirmpassword'];


    if(isset($_POST['startEntering'])) 
    {
        if(!empty($_POST['branch']) && !empty($_POST['topic']) && !empty($_POST['totalQuestions'])){
            // $quizid = $_POST['questionID'];
            $branch = $_POST['branch'];
            $quiztopic = $_POST['topic'];
            $keywords = $_POST['keywords'];
            $totalques = $_POST['totalQuestions'];

            $query = "INSERT INTO `quiz` (`branch`, `topic`, `keywords`, `totalQuestions`) VALUES ('$branch', '$topic', '$keywords', '$totalques')";
            $query_result = mysqli_query($con, $query);

            if($query_result){
                echo "Quiz data uploaded succesfully!";
            }else{
                echo "Details not uploaded";
            }

          
        }
        else{
            echo "Please enter all required fields";
        }
    }
        // $email = $_POST["email"];
        // $message = $_POST["message"];

        // mysqli_query($con, "INSERT INTO contact (email, message) VALUES ('" . $email. "','" . $message. "')");
        // $insert_id = mysqli_insert_id($con);
        // $display = "Your contact information is saved successfully.";
        // $type = "success";
    
?>