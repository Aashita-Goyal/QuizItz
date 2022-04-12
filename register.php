<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Page</title>
  <link rel="stylesheet" href="./css/stylelogin.css">
</head>
<body>
  <div class="login-form" style="margin-top: 20px;">
    <form method="post" action="./scripts/registerscript.php">
      <h1>Sign Up</h1>
      <br>
      <img src="https://th.bing.com/th/id/R.7ea4af7d8401d2b43ee841bfa2abe89d?rik=xidyUKdveUKULQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-download-icons-logos-emojis-users-2240.png&ehk=2%2bOqgdMZqFkKaBclc%2fPL9B86vLju3iBGiFmH64kXaTM%3d&risl=&pid=ImgRaw&r=0" alt="Avatar"
        class="center">
      <br>
      <div class="content">
      <div class="input-field"> 
          <input type="text" placeholder="Name" autocomplete="off" name="name" required="true" pattern="[A-Za-z]{3,}" title="Enter valid name">
        </div>
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="off" name="email" required="true">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password" name="password" required="true">
        </div>
        <div class="input-field">
            <input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirmpassword" required="true">
          </div>
        <a href="login.php" class="link">Already have an account? Login</a>
      </div>
      <div class="action">
      <input type="submit" value="Sign Up" class="button">
      </div>
    </form>
  </div>
</body>
</html>



<!-- <form method="post" action="./scripts/registerscript.php">
      <h1>Sign Up</h1>
      <br>
      <img src="https://th.bing.com/th/id/R.7ea4af7d8401d2b43ee841bfa2abe89d?rik=xidyUKdveUKULQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-download-icons-logos-emojis-users-2240.png&ehk=2%2bOqgdMZqFkKaBclc%2fPL9B86vLju3iBGiFmH64kXaTM%3d&risl=&pid=ImgRaw&r=0" alt="Avatar"
        class="center">
      <br>
      <div class="content">
      <div class="input-field"> 
          <input type="text" placeholder="Name" autocomplete="nope" name="name" required="true" pattern="[A-Za-z]{3,}" title="Enter valid name">
        </div>
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope" name="email" required="true" pattern="[a-z0-9_.]+@[a-z]+.[a-z]{2,}" title="Enter valid email">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password" name="password" required="true" pattern="[A-Za-z0-9_@.#]" title="Enter valid password">
        </div>
        <div class="input-field">
            <input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirmpassword" required="true">
          </div>
        <a href="register.html" class="link">Already have an account? Login</a>
      </div>
      <div class="action">
      <input type="submit" value="Sign Up" class="button">
      </div>
    </form> -->