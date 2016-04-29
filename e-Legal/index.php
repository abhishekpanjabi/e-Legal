<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Legal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

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
      <h1><a href=".">E-Legal</a></h1>
      <p>Privatised Government Website
    </div>

    <div class="fl_right">

      <?php
        session_start();
        if(isset($_SESSION["logged"]))
          if($_SESSION["logged"]=="yes")
            echo '<div class="logged">
                    <ul>
                      <li><a class="loggeddrop" href=""><img src="pages/arrow_down_white.png">'.$_SESSION["name"].'</a>
                      <ul>
                      <li><a href="pages/viewprofile.php">View Profile</a></li>
                      <li><a href="pages/logout.php">Log Out</a></li>
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
        <li class="active"><a href=".">Home</a></li>
        <li><a class="drop" href="onepage-scroll-master/Demo/departments.html">Departments</a>
          <ul>
            <li><a href="pages/gallery.php">Gallery</a></li>
            <li><a href=".">Health</a></li>
            <li><a href=".">Medical</a></li>
            <li><a href="onepage-scroll-master/Demo/transport.html">Road and Transport</a></li>
            <li><a href=".">Administrative</a></li>
            <li><a href=".">Clealiness</a></li>
            <li><a href="onepage-scroll-master/Demo/incometax.html#1">Income Tax</a></li>
            <li><a href="onepage-scroll-master/Demo/election.html">Election Commision</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Forms</a>
          <ul>
            <li><a href="pages/form.php?file=Voter-Id">Voter Id </a></li>
            <li><a class="drop" href="#">License</a>
              <ul>
                <li><a href="pages/form.php?file=learning-license">Learning License</a></li>
                <li><a href="pages/form.php?file=driving-license">Driving License</a></li>
              </ul>
              <li><a href="pages/form.php?file=pancard">PAN Card</a></li>
              <li><a href="pages/form.php?file=incometax">Income Tax: Form-16</a></li>
              <li><a href="pages/form.php?file=passport">Passport Application</a></li>
            </li>
          </ul>
        </li>
        <li><a href="pages/feedback.php">Feedback</a></li>
        <li><a href="onepage-scroll-master/Demo/abtus.html">About Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/govt.jpg" alt=""></a>
        <figcaption>
          <h2>Helping people</h2>
          <p>This is a website which will help the citizens of India in many ways.
		      Here we present you a website that will provide you any information about all the departments of government.</p>
        </figcaption>
      </figure>
      
      <figure id="slide-2"><a class="view" href="#"><img src="images/demo/login.jpg" alt=""></a>
        
		    <button onclick="window.location.href='sign-up-login-form/index.html'"><b><span>Proceed</span></b></button>
        
      </figure>

      <figure id="slide-3"><a class="view" href="#"><img src="images/contactus.jpg" alt=""></a>
        <figcaption>
          <h2>Feel Free to Contact US</h2>
          <p>If you have any questions or any doubts about our website or it's relataed thing feel free to write your question and we will reply u as soon as possible.</p>
          <p>We are here to help you 24x7.</p>
          <p class="right"><a href="pages/contactus.php">Contact Us &raquo;</a></p>
        </figcaption>
      </figure>

      <figure id="slide-4"><a class="view" href="#"><img src="images/language.jpg" alt=""></a>
        <figcaption>
          <h2>Localisation of Languages</h2>
          <p>Here we will also provide the options for choosing your own language.</p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="news.jpg" alt=""></a>
        <figcaption>
          <h2>Latest News and Events</h2>
          <p> Here we will give you the information you need to have.</p>
        </figcaption>
      </figure>

      <ul id="slide-tabs">
        <li><a href="#slide-1">All About Our Website</a></li>
        <?php 
        if(!isset($_SESSION["logged"]))
          echo '<li><a href="#slide-2">Login & Registration</a></li>';
        
        echo'<li><a href="#slide-4">Languages</a></li>
        <li><a href="#slide-5">Latest News And Events</a></li>';
        if(isset($_SESSION["logged"]))
          echo '<li><a href="#slide-3">Contact Us</a></li>';
        ?>
      </ul>

    </div>
  </div>
</div>

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 

      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="pages/findus.php">Find Us With Google Maps &raquo;</a></figcaption>
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
        <form class="clear" method="post" action="pages/newsletter.php">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" name="email" placeholder="Enter Email Here&hellip;">
            <button class="fa fa-sign-in" name="submit" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
    </footer>
  </div>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left"><center>Copyright &copy; 2016 - All Rights Reserved - <a href="#">www.e-legal.com</a></center></p>
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>