<?php
    require '../db/dbconn.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
    //email check and registration
    $query = "Select * from user where email = '$email '";
    $query_result = mysqli_query($con,$query);
    if(mysqli_num_rows($query_result) == 0)
    {
        if($password == $confirmpassword)
        {
            $confirmpassword = md5($confirmpassword);
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
        } else {
            ?>
<script>window.alert("Password not matched!");
    window.location.href = "http://localhost/QuizItz/register.php";</script>
<?php
        }
    } else {
    ?>
<script>window.alert("User already exists!");
    window.location.href = "http://localhost/QuizItz/login.php";</script>
<?php
}