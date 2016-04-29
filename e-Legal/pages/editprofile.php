<?php
  session_start();
  if(isset($_POST["submit"]))
  {
    $fname=strip_tags(stripcslashes(trim($_POST["fname"])));
    $lname=strip_tags(stripcslashes(trim($_POST["lname"])));
    $gender=strip_tags(stripcslashes(trim($_POST["gender"])));
    $phno=strip_tags(stripcslashes(trim($_POST["phno"])));
    $dob=strip_tags(stripcslashes(trim($_POST["dob"])));
    $sec_que=strip_tags(stripcslashes(trim($_POST["sec_que"])));
    $answer=strip_tags(stripcslashes(trim($_POST["answer"])));

    if(!preg_match("/^[1-9]([0-9]{9}$)/", $phno))
    {
      echo "<script>
          alert('Enter valid phone number.');
          window.location.href='http://localhost:81/e-Legal/sign-up-login-form/';
        </script>";
      exit();
    } 
      
    $conn = new mysqli("localhost","root","","elegal");

    if ($conn->connect_error)
      die("Connection failed: " . $conn->connect_error);

    $sql = "UPDATE user SET fname='".$fname."', lname='".$lname."', gender='".$gender."', phno='".$phno."', dob='".$dob."', sec_que='".$sec_que."', answer='".$answer."' where email='".$_SESSION["name"]."';";

    if($conn->query($sql))
    { 
      echo "<script>
              alert('Your records are successfully updated.');
              window.location.href='http://localhost:81/e-Legal/pages/viewprofile.php';
            </script>";
      exit();
    }

    else
    {
      echo "<script>
              alert('Sorry. We could not process your request. Please try again later.');
              window.location.href='http://localhost:81/e-Legal/pages/viewprofile.php';
            </script>";
      exit();
    }
  }
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Legal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style type="text/css">
  .logged{
    position: relative;
  }
  .logged ul{
    text-align: left;
    list-style-type: none;
  }

  .logged ul ul{
    z-index:9999; 
    position:absolute;
  }

  .logged ul li{
    text-align: inherit;
    display: block;
    color: black;
  }

  .logged ul li a{
    color: white;
    border-color:rgba(0,0,0,.6);
  }

  .logged li>ul{
    display: none;
  }

  .logged ul li ul li{
    margin-top: 10px;
    border-color:rgba(255,255,255,.6);
  }

  .logged ul li:hover>ul{
    background-color:rgba(0,0,0,.6);
    display: block;
    color:white;
    border-radius: 5px; 
  }

  .logged ul li ul li:hover>a{
    border-color:rgba(255,255,255,.6);
    text-decoration: underline;
  }

  .logged li a{
    border-color:rgba(255,255,255,.6);
  }

  li li:hover > a{ background-color: #55ABDA;}
</style>
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="clear"> 

  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 

    <div id="logo" class="fl_left">
      <h1><a href="../.">E-Legal</a></h1>
      <p>Privatised Government Website
    </div>
    <div class="fl_right">

      <?php
        if(isset($_SESSION["logged"]))
          if($_SESSION["logged"]=="yes")
            echo '<div class="logged">
                    <ul>
                      <li><a class="loggeddrop" href=""><img src="arrow_down_white.png">'.$_SESSION["name"].'</a>
                      <ul>
                      <li><a href="viewprofile.php">View Profile</a></li>
                      <li><a href="logout.php">Log Out</a></li>
                    </ul></ul></li>
                  </div>';
      ?>
    </div>
  </header>
</div>

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <ul class="clear">
        <li class="active"><a href="../">Home</a></li>
        <li><a class="drop" href="../onepage-scroll-master/Demo/departments.html">Departments</a>
          <ul>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="../.">Health</a></li>
            <li><a href="../.">Medical</a></li>
            <li><a href="../.onepage-scroll-master/Demo/transport.html">Road and Transport</a></li>
            <li><a href="../.">Administrative</a></li>
            <li><a href="../.">Clealiness</a></li>
            <li><a href="../.onepage-scroll-master/Demo/incometax.html#1">Income Tax</a></li>
            <li><a href="../.onepage-scroll-master/Demo/election.html">Election Commision</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Forms</a>
          <ul>
            <li><a href="form.php?file=Voter-Id">Voter Id </a></li>
            <li><a class="drop" href="#">License</a>
              <ul>
                <li><a href="form.php?file=learning-license">Learning License</a></li>
                <li><a href="form.php?file=driving-license">Driving License</a></li>
              </ul>
            </li>
            <li><a href="form.php?file=pancard">PAN Card</a></li>
              <li><a href="form.php?file=incometax">Income Tax: Form-16</a></li>
              <li><a href="form.php?file=passport">Passport Application</a></li>
          </ul>
        </li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="../onepage-scroll-master/Demo/abtus.html">About Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">

    <?php
        echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
                <table style="font-size: 20px; line-height: 35px;">
                <tr>
                  <td style="font-size: 22px;"><b><span>Name: </span></b></td>
                  <td><input type="text" name="fname" value="'.$_POST["fname"].'" / ></td>
                  <td><input type="text" name="lname" value="'.$_POST["lname"].'" /></td>
                </tr>
                <tr>
                  <td  style="font-size: 22px;"><b><span>Gender: </span></b></td>
                  <td><input type="text" name="gender" value="'.$_POST["gender"].'" /></td>
                </tr>
                <tr>
                  <td  style="font-size: 22px;"><b><span>Birth-date: </span></b></td>
                  <td><input type="date" name="dob"  value="'.$_POST["dob"].'" /></td>
                </tr>
                <tr>
                  <td  style="font-size: 22px;"><b><span>Birth-date: </span></b></td>
                  <td><input type="number" name="phno" maxlength="10" value="'.$_POST["phno"].'" /></td>
                </tr>
                <tr>
                  <td  style="font-size: 22px;"><b><span>Security Question: </span></b></td>
                  <td><input type="text" name="sec_que" value="'.$_POST["sec_que"].'" /></td>
                </tr>
                <tr>
                  <td  style="font-size: 22px;"><b><span>Answer: </span></b></td>
                  <td><input type="text" name="answer"  value="'.$_POST["answer"].'" /></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <center>
                      <input type="submit" name="submit" value="Save Profile" />
                    </center>
                  </td>
                </tr>
              </table>
            </form>';
    ?>

    </main>
  </div>
</div>


<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="../images/demo/worldmap.png" alt="">
          <figcaption><a href="findus.php">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        Technology Infinity Developers<br>
        Vallabh Vidhyanagar<br>
        Anand<br>
        388001<br>
        <br>
        <i class="fa fa-phone pright-10"></i> +91-9876543210<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">contact@e-legal.com</a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <form class="clear" method="post" action="newsletter.php">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" name="email" placeholder="Enter Email Here&hellip;">
            <button class="fa fa-sign-in" name="submit" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
   
    <p class="fl_left"><center>Copyright &copy; 2016 - All Rights Reserved - <a href="#">www.e-legal.com</a></center></p>
    
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script> 
<script src="../layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>