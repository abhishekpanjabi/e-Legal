<?php

    if(isset($_POST["submit"])) 
    {
      $email=$_POST["email"];
      $pass=$_POST["pass"];

      $conn = new mysqli("localhost","root","","elegal");
      $query="(SELECT password FROM user WHERE email='".$email."');";
      $result = $conn->query($query);

      if(is_object($result) && $result->num_rows > 0)
      { 
        $row = $result->fetch_assoc();
    
        if($pass == $row["password"])
        {
          session_start();
          $_SESSION["logged"]="yes";
          $_SESSION["name"] = $email;
          $_SESSION["email"]=$email;

          echo "<script type='text/javascript'>
            window.location.href='http://localhost:81/e-Legal/';
            </script>";
          exit(); 
        } 

        else
        {   
          echo "<script type='text/javascript'>
            alert('Password does not match !!');
            window.location.href='http://localhost:81/e-Legal/sign-up-login-form/';
            </script>";
            exit();
        }
      }
      else
      {
        echo "<script type='text/javascript'>
          alert('Your account does not exist. !!');
          window.location.href='http://localhost:81/e-Legal/sign-up-login-form/';
          </script>";
        exit();
      }

      $conn->close(); 
    }

?>