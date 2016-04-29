<?php
if(isset($_POST["submit"])) 
{
      $email = $_POST["email"];
      $msg = "Dear User,<br><br>You have been subscribed to our service of Latest News and Updates.<br><br>Now you will be informed regularly via email.";

      $conn = new mysqli("localhost","root","","elegal");
      $query="SELECT email FROM emails WHERE email='".$email."';";
      $result = $conn->query($query);

      if(is_object($result) && $result->num_rows > 0)
      {
      	echo "<script>
      			alert('You have already subscribed to our Newsletter. !!');
      			window.location.href='http://localhost:81/e-Legal/';
      		</script>";
      	exit();
      }

      else
      {	
      	$query="INSERT INTO emails (email) VALUES ('$email');";
      	
      	if($conn->query($query) === TRUE)
      	{
      		echo "<script>
      			   alert('You are subscribed to our Newsletter. !!')
                        </script>";

                  require_once('../../PHPMailer/class.phpmailer.php');

                  $mail = new PHPMailer();
                  $mail->IsSMTP(); // enable SMTP
                  $mail->SMTPDebug = 1;
                  $mail->CharSet="UTF-8";
                  $mail->SMTPSecure = 'tls';
                  $mail->Host = 'smtp.gmail.com';
                  $mail->Port = 587;
                  $mail->Username = 'technologyinfinity.elegal@gmail.com';
                  $mail->Password = 'eLegal2013';
                  $mail->SMTPAuth = true;

                  $mail->From = 'technologyinfinity.elegal@gmail.com';
                  $mail->FromName = 'e-Legal';
                  $mail->AddAddress($email);
                  $mail->IsHTML(true);
                  $mail->Subject = "Subscribed to e-Legal !!";
                  $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                  $mail->Body = $msg;

                  if(!($mail->Send()))
                        echo "<script>
                                    alert('Mailer Error: " . $mail->ErrorInfo."');
                              </script>";

      		echo "<Script>window.location.href='http://localhost:81/e-Legal/';
      		  </script>";
      	     
                  exit();
      	}

      	else
      	{
      		echo "<script>
      				alert('Sorry an occured !! Please try again later.');
      				window.location.href='http://localhost:81/e-Legal/';
      		  	</script>";
      		exit();
      	}
      }
}

else
      echo "Submit not pressed";
?>