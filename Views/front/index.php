<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Spa Salon</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/bgstretcher.js"></script>
<script>
$(document).ready(function () {
    $('body').bgStretcher({
        images: ['images/slide-1.jpg', 'images/slide-2.jpg', 'images/slide-3.jpg'],
        imageWidth: 1600,
        imageHeight: 964,
        resizeProportionally: true,
        slideDirection: 'N',
        slideShowSpeed: 1000,
        transitionEffect: 'fade',
        sequenceMode: 'normal',
        pagination: '#nav'
    });
});
</script>
<!--[if lt IE 9]>   
<script src="js/html5shiv.js"></script>
<link href="css/ie.css" rel="stylesheet" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css">  
<![endif]-->
</head>
<body>
<?php
        if(isset($_SESSION['message'])){
        ?>
        <script>alert('compte verifié');</script>
        <?php
        unset($_SESSION['message']);
        } ?>
<div class="extra-block1">
  <div class="row-top">
    <div class="main">
      <ul class="list-soc">
        <li><a href="#"><img alt="" src="images/soc-icon1.png"></a></li>
        <li><a href="#"><img alt="" src="images/soc-icon2.png"></a></li>
      </ul>
    </div>
  </div>
  <header>
    <div class="row-nav">
      <div class="main">
        <h1 class="logo"><a href="index.php"><img alt="" src="images/logo.png"></a></h1>
        <nav>
          <ul class="menu">
            <?php
if (isset($_SESSION['username'])) {
  ?>
<li><a href="">Hello <?php echo $_SESSION['nom_prenom_user'] ?></a></li>
<li><a href="logout.php">Logout</a></li>
  <?php
  if ($_SESSION['verified']==0) {
   ?>
  <script>alert('compte non verifié')</script>
   <?php
  }
} else {
 ?>
<li><a href="signin.php">sign in</a></li>
<li><a href="signup.php">sign up</a></li>
 <?php
}
            ?>
            <li class="current"><a href="index.php">Home</a></li>
            
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            
            
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
</div>
<div class="block">
  <div class="nav-buttons">
    <div id="nav">&nbsp;</div>
  </div>
  <div class="row-1">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <figure class="box-1"><img src="images/page1-img1.jpg" alt="">
            <figcaption>Face Care <a href="more.html"></a></figcaption>
          </figure>
        </article>
        <article class="grid_4">
          <figure class="box-1"><img src="images/page1-img2.jpg" alt="">
            <figcaption>Hand Care <a href="more.html"></a></figcaption>
          </figure>
        </article>
        <article class="grid_4">
          <figure class="box-1"><img src="images/page1-img3.jpg" alt="">
            <figcaption>Foot Care <a href="more.html"></a></figcaption>
          </figure>
        </article>
      </div>
    </div>
  </div>
  <footer>
    <div class="main aligncenter">
      <div class="privacy"><strong>Enigma Spa Salon &copy; 2045 | <a href="privacy-policy.html">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com">TemplateMonster.com</a></strong></div>
    </div>
  </footer>
</div>
</body>
</html>