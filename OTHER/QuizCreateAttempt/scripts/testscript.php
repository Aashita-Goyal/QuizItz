<?php
    require '../db/dbconn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    
            $query = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$confirmpassword')";
            $query_result = mysqli_query($con, $query);
            if($query_result == true)
            {
                ?>
<script>window.alert("Registration successful!");
    window.location.href = "http://localhost/QuizItz/login.php";</script>
<?php
            } else {
                die(mysqli_error($con));
            }
        
   