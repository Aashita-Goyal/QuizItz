<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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

<body class="login-body" id="register-body">
  <div class="login-form" style="margin-top: 10px;">
    <form method="post" action="./scripts/registerscript.php">
      <h1>Sign Up</h1>
      <br>
     <!-- <image src="https://th.bing.com/th/id/R.7ea4af7d8401d2b43ee841bfa2abe89d?rik=xidyUKdveUKULQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-download-icons-logos-emojis-users-2240.png&ehk=2%2bOqgdMZqFkKaBclc%2fPL9B86vLju3iBGiFmH64kXaTM%3d&risl=&pid=ImgRaw&r=0" 
        alt="Avatar"
        class="center" /> -->
        <img src="./assets/Images/avatar.png" 
        alt="Avatar"
        class="center"
        />
      <br />
      <div class="content">
      <div class="input-field"> 
          <input type="text" placeholder=" Name " autocomplete="off" name="name" required="true" pattern="^[A-Za-z]{2,}$" title="Enter a valid name">
        </div>
        <div class="input-field">
          <input type="email" placeholder=" Email " autocomplete="off" name="email" required="true" pattern="^[a-zA-Z0-9_\-\.]{3,}@[A-Za-z]{3,}.[A-Za-z]{2,}$" title="Enter a valid email">
        </div>                                                                                             
        <div class="input-field">
          <input type="password" placeholder=" Password " autocomplete="new-password" name="password" required="true" pattern="^[A-Z][a-z0-9@_\.]{8,}$" title="A minimum 8 characters password contains first character as uppercase and then combinations of lowercase letter, number and special characters includes @ or _"> 
        </div>
        <div class="input-field">
            <input type="password" placeholder=" Confirm Password " autocomplete="new-password" name="confirmpassword" required="true" pattern="^[A-Z][a-z0-9@_\.]{8,}$" title="A minimum 8 characters password contains first character as uppercase and then combinations of lowercase letter, number and special characters includes @ or _">
          </div>
        <a href="login.php" class="link-login">Already have an account? Login</a>
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