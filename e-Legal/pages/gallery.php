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

  .loggeddrop::after{ content:"\f0d7";}
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
        session_start();
        if(isset($_SESSION["logged"]))
          if($_SESSION["logged"]=="yes")
            echo '<div class="logged">
                    <ul>
                      <li><a class="loggeddrop" href="">'.$_SESSION["name"].'</a>
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
        <li class="active"><a href="../.">Home</a></li>
        <li><a class="drop" href="../onepage-scroll-master/Demo/departments.html">Departments</a>
          <ul>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="../.">Health</a></li>
            <li><a href="../.">Medical</a></li>
            <li><a href="../onepage-scroll-master/Demo/transport.html">Road and Transport</a></li>
            <li><a href="../.">Administrative</a></li>
            <li><a href="../.">Clealiness</a></li>
            <li><a href="../onepage-scroll-master/Demo/incometax.html#1">Income Tax</a></li>
            <li><a href="../onepage-scroll-master/Demo/election.html">Election Commision</a></li>
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

      <div id="gallery">
        <figure>
          <header class="heading"></header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/anandmap1.jpg" title="Anand Map"><img class="borderedbox" src="../images/demo/gallery/anandmap.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/police.jpg" title="Policemen"><img class="borderedbox" src="../images/demo/gallery/police2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/road1.jpg" title=""><img class="borderedbox" src="../images/demo/gallery/road2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/rfu1.jpg" title="Run For Unity"><img class="borderedbox" src="../images/demo/gallery/rfu2.jpg" alt=""></a></li>
            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/ss1.jpg" title="Seva Sadan"><img class="borderedbox" src="../images/demo/gallery/ss2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/coll1.jpg" title="Collector's Office"><img class="borderedbox" src="../images/demo/gallery/coll2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/namo1.jpg" title="Narendra Modi"><img class="borderedbox" src="../images/demo/gallery/namo2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/airport1.jpg" title="Airport Auhtority Of India"><img class="borderedbox" src="../images/demo/gallery/airport2.jpg" alt=""></a></li>
            <li class="one_quarter first"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/election1.jpg" title="Election Commission Of India"><img class="borderedbox" src="../images/demo/gallery/election2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/income1.jpg" title="Income Tax"><img class="borderedbox" src="../images/demo/gallery/income2.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/agri1.png" title="Agriculture"><img class="borderedbox" src="../images/demo/gallery/agri2.png" alt=""></a></li>
            <li class="one_quarter"><a class="nlb" data-lightbox-gallery="gallery1" href="../images/demo/gallery/rto1.jpg" title="RTO"><img class="borderedbox" src="../images/demo/gallery/rto2.jpg" alt=""></a></li>
          </ul>
        </figure>
      </div>

      <nav class="pagination"></nav>
        
      <div class="clear"></div>
    </main>
  </div>
</div>

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 

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
      
    </footer>
  </div>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left"><center>Copyright &copy; 2016 - All Rights Reserved - <a href="#">www.e-legal.com</a></center></p>  
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script> 
<script src="../layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
</body>
</html>