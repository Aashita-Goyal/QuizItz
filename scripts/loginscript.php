<?php
    session_start();
    require '../db/dbconn.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 0)
    {
?>
    <script>
        window.alert("User does not exists!");
        window.location.href = "http://localhost/QuizItz/login.php";
    </script>
<?php
    } 
    else 
    {
    $query = "SELECT password FROM user WHERE email = '$email'";
    $query_result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($query_result);
    if($password == $result['password'])
    {
        $query = "SELECT email FROM user WHERE email = '$email'";
        $query_result = mysqli_query($con, $query);
        $result = mysqli_fetch_array($query_result);
        $_SESSION['email'] = $result['email'];
?>
    <script>
        window.alert("Welcome to QuizItz...");
        window.location.href = "http://localhost/QuizItz/home.php";
    </script>
<?php
    } 
    else 
    {
?>
    <script> 
        window.alert("Incorrect password!");
        window.location.href = "http://localhost/QuizItz/register.php";
    </script>
<?php
    } 
}   
?>