<?php
    require '../db/dbconn.php';
    if(!empty($_POST["send"])) 
    {
        $email = $_POST["email"];
        $message = $_POST["message"];

        mysqli_query($con, "INSERT INTO contact (email, message) VALUES ('" . $email. "','" . $message. "')");
        $insert_id = mysqli_insert_id($con);
        $display = "Your contact information is saved successfully.";
        $type = "success";
    }
?>