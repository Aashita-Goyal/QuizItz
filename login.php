<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="./css/stylelogin.css">
</head>

<body>
  <div class="login-form" style="margin-top: 100px;">
    <form method="post" action="./scripts/loginscript.php">
      <h1>Sign In</h1>
      <br>
      <img
        src="https://th.bing.com/th/id/R.7ea4af7d8401d2b43ee841bfa2abe89d?rik=xidyUKdveUKULQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-download-icons-logos-emojis-users-2240.png&ehk=2%2bOqgdMZqFkKaBclc%2fPL9B86vLju3iBGiFmH64kXaTM%3d&risl=&pid=ImgRaw&r=0"
        alt="Avatar" class="center">
      <br>
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="off" name="email">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password" name="password">
        </div>
<<<<<<< HEAD:signin.html
        <a href="signup.html" class="link">Don't have account? Register</a>
=======
        <a href="register.php" class="link" style="text-align: center;">Don't have account? Register</a>
>>>>>>> a56677abee10fbe45ed6d86b661af7ae3a8d0fa3:login.php
      </div>
      <div class="action">
        <input type="submit" value="Sign In" class="button">
      </div>
    </form>
  </div>
</body>

</html>