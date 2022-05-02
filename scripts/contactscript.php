<?php
    require '../db/dbconn.php';
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "Select * from user where email = '$email '";
    $query_result = mysqli_query($con,$query);
    if($query_result == true)
    {
        $query = "INSERT INTO `contact` (`email`, `message`) VALUES ('$email', '$message')";
        $query_result = mysqli_query($con, $query);
        if($query_result == true)
        {
?>
<script>window.alert("Message sent successfully.");
window.location.href = "http://localhost/QuizItz/contact.php";</script>
<?php
        }
    }
    else
    {
    ?>
        <script>window.alert("Incorrect Email.");
window.location.href = "http://localhost/QuizItz/contact.php";</script>
<?php
    }
?>