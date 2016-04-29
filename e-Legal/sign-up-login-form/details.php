<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">
<?php
  session_start();
?>
    
  </head>

  <body>
<?php
  $type=$_SESSION["type"];
  echo '
    <div class="form">
      <ul class="tab-group">
        <li class="tab active" style="margin-left:32%;"><a href="#'.$type.'">Sign Up</a></li> 
        
      </ul>
      
      <div class="tab-content active">';
      
      if($_SESSION["type"]=="Doctor")
      {
      echo '
        <div id="Doctor">   
          <h1>Enter Details</h1>
          
          <form action="submit.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
               Enter Degree<span class="req">*</span>
              </label>
              <input type="text" name="degree" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Disease you can cure<span class="req">*</span>
              </label>
              <input type="text" name="disease_cure" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Hospital attends<span class="req">*</span>
            </label>
            <input type="text" name="hospital_attends" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
          <label>Upload a profile Picture<span class="req">*</span>:</label>
            <input type="file" size="40px" style="margin-left:280px;  margin-top:10px;" name="image" id="image" accept="image/JPEG"></input>
          </div>  

          <button type="submit" name="submit" class="button button-block" style="margin-top: 30px;" />Get Started</button>
          
          </form>

        </div>';
        }
        else if($_SESSION["type"]=="HospitalAdmin")
        {
          echo '<div id="HospitalAdmin">   
          
          <form action="submit.php" method="post">
          
            <div class="field-wrap">
            <label>
              Hospital Name<span class="req">*</span>
            </label>
            <input type="text" name="hname" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text" name="address" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Facilities<span class="req">*</span>
            </label>
            <input type="text" name="facilities" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
          <label>Upload Picture of Hospital<span class="req">*</span>:</label>
            <input type="file" size="40px" style="margin-left:280px; margin-top:10px;" name="image" id="image" accept="image/JPEG"></input>
          </div>  

          <button type="submit" name="submit" class="button button-block"/>Submit</button>
          </form>';
        } 
?>        

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
