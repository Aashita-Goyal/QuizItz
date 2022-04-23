<?php
    require './db/dbconn.php';
    $msg = "";
    if(isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        mysqli_query($con, "insert into contact('email', 'message') values($email, $message)");
        ;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="./CSS/style1.css" />
    <link rel="stylesheet" href="./CSS/stylelogin.css" />
    <link rel="stylesheet" href="./CSS/style.css" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="contact-body">
    <div class="login-form" style="margin-top: 100px;">
        <form method="post" action="">
            <h1 class="contact-head">Contact Us</h1>
            <div class="content">
                <div class="input-field">
                    <input type="email" placeholder=" Email " name="email" autocomplete="off" class="contect-input" pattern="[a-zA-z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}" class="input-text">
                </div>
                <br>
                <div class="input-field">
                    <label>Message</label>
                    <br>
                    <textarea type="message" name="message" placeholder=" Write your message here... " rows=5 cols=50></textarea>
                </div>
            </div>
            <div class="action">
                <input type="submit" value="Submit" name="submit" class="button">
            </div>
        </form>
    </div>
</body>

</html>