<!DOCTYPE html>

<?php
  session_start();

  if(isset($_POST["sub"]))
  {
    $ans = strip_tags(stripcslashes(trim($_POST["answer"])));

    if($ans == $_SESSION["answer"])
    {
      echo "<script>
              window.location.href = 'enterpassword.php';
            </script>";
      exit();
    }

    else
    {
      echo "<script>
              alert('Your answer does not match with our database. !!');
              window.location.href = 'enteranswer.php';
            </script>";
      exit();
    }
  }
?>

<?php 

  if(isset($_POST["submit"]))
  {
    $conn = new mysqli("localhost","root","","elegal");

    if ($conn->connect_error)
      die("Connection failed: " . $conn->connect_error);

    $email = strip_tags(stripcslashes(trim($_POST["email"])));

    $query = "SELECT sec_que,answer FROM user WHERE email = '".$email."';";

    $result = $conn->query($query);

    if(is_object($result) && $result->num_rows > 0)
    { 
      $row = $result->fetch_assoc();
      $sec_que = $row["sec_que"];
      $answer = $row["answer"];
      $_SESSION["answer"] = $answer;
      $_SESSION["email"] = $email;
    }

    else
    {
      echo "<script>
              alert('Your account does not exist. !!');
              window.location.href='.';
            </script>";
      exit();
    }
  }
  else
  {
    echo "<script>
            alert('You must have to enter an email in order to reset your password. !!');
            window.location.href='enteremail.html';
            </script>";
    exit();
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
        <li class="tab active" style="margin-left:32%;"><a href="#signup">Forgot Password</a></li>
        <!-- <li class="tab"><a href="#login">Log In</a></li> -->
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          
          <form method="post">
          <h2 style="color: white;">Your Security Question:</h2> 
          <div class="field-wrap">
            <label>
              
            </label>
            <input type="text" name="sec_que" value="<?php echo $sec_que;?>" readonly autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Enter Your Answer<span class="req">*</span>
            </label>
            <input type="text" name="answer" required autocomplete="off"/>
          </div>

          <button type="submit" name="sub" onSubmit="<?php echo $_SERVER['PHP_SELF']; ?>" class="button button-block" style="margin-top: 30px;">Proceed</button>
          
          </form>

        </div>
        
      </div>
    </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

  </body>
</html>
