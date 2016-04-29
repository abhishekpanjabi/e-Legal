<!DOCTYPE html>

<?php 
  session_start();

  if(isset($_POST["submit"]))
  {
    $conn = new mysqli("localhost","root","","elegal");

    if ($conn->connect_error)
      die("Connection failed: " . $conn->connect_error);

    $pass = strip_tags(stripcslashes(trim($_POST["pass"])));
    $repass = strip_tags(stripcslashes(trim($_POST["repass"])));

    if($pass != $repass)
    {
       echo "<script>
              alert('Password does not match. !!');
              window.location.href='enterpassword.php';
            </script>";
      exit();
    }

    $query = "UPDATE user SET password = '".$pass."' WHERE email = '".$_SESSION["email"]."';";

    if($conn->query($query) === TRUE)
    { 
      echo "<script>
              alert('Your attempt of password reset was successful. Log In to access your account.');
              window.location.href='index.html';
            </script>";
      exit();
    }

    else
    {
      echo "<script>
              alert('Your attempt of password reset was unsuccessful. !! Plaease try again later.');
              window.location.href='index.html';
            </script>";
      exit();
    }
  }
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active" style="margin-left:32%;"><a href="#signup">Enter Password</a></li>
        <!-- <li class="tab"><a href="#login">Log In</a></li> -->
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          
          <form method="post">

          <div class="field-wrap">
            <label>
              Enter New Password<span class="req">*</span>
            </label>
            <input type="text" name="pass" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Re-Enter New Password<span class="req">*</span>
            </label>
            <input type="text" name="repass" required autocomplete="off"/>
          </div>

          <button type="submit" name="submit" onSubmit="<?php echo $_SERVER['PHP_SELF']; ?>" class="button button-block" style="margin-top: 30px;">Proceed</button>
          
          </form>

        </div>
        
      </div>
    </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

  </body>
</html>
