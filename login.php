<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

<body class="login-body">
  <div class="login-form" id="login-form-image" > <!--style="margin-top: 100px;"-->
    <form method="post" action="./scripts/loginscript.php">
      <h1>Sign In</h1>
      <br>
      <!-- <image src="https://th.bing.com/th/id/R.7ea4af7d8401d2b43ee841bfa2abe89d?rik=xidyUKdveUKULQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-download-icons-logos-emojis-users-2240.png&ehk=2%2bOqgdMZqFkKaBclc%2fPL9B86vLju3iBGiFmH64kXaTM%3d&risl=&pid=ImgRaw&r=0" 
        alt="Avatar"
        class="center" /> -->
        <!-- <img src="./assets/Images/avatar.png" 
        alt="Avatar"
        class="center"
        /> -->
      <br />
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder=" Email " autocomplete="off" name="email" pattern="[a-zA-z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}" class="input-text">
        </div>
        <div class="input-field">
          <input type="password" placeholder=" Password " autocomplete="new-password" name="password" class="input-text">
        </div>
        <a href="register.php" class="link-login">Don't have account? Register</a>
      </div>
      <div class="action">
        <input type="submit" value="Sign In" class="button">
      </div>
    </form>
  </div>
</body>

</html>