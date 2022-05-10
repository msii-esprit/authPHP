<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Spa Salon | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/bgstretcher.js"></script>
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
<div class="extra-block">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li class="current"><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <section id="content">
    <div class="main-block">
      <div class="container_12">
        <div class="wrapper border-vert">
          <article class="grid_5">
            <h2>sign up</h2>
            
            <dl class="address">
              <dt>Welcome back ...<br>
            </dl>
          </article>
          <article class="grid_5 prefix_2">
            <h3>sign up</h3>
            <form id="contact-form" method="POST" action="ajouterUtilisateur.php">
              <fieldset>
                <div>
                  <label class="name">
                  <input type="text" class="form-control" name="username"  placeholder="username" required>
                    <br>
                </div>
                <div>
                  <label class="email">
                  <input type="password" class="form-control" name="password_user"  placeholder="password" required>
                    <br>
                </div>
                <div>
                  <label class="phone">
                  <input type="text" name="nom_user" class="form-control"  placeholder="Your Name" required>
                    <br>
                </div>

                <div>
                  <label class="phone">
                  <input type="text" class="form-control" name="prenom_user"  placeholder="prenom" required>
                    <br>
                </div>

                <div>
                  <label class="phone">
                  <input type="email" class="form-control" name="email_user"  placeholder="email" required>
                    <br>
                </div>

                <div>
                  <label class="phone">
                  <input type="number" class="form-control" name="tel_user"  placeholder="00 000 000" required>
                    <br>
                </div>

                <div>
                  <label class="phone">
                  <input type="text" class="form-control" name="adresse_user"  placeholder="adresse" required>
                    <br>
                </div>
                <input type="hidden" class="form-control" name="role_user" value="User"  placeholder="adresse" >
                <input type="submit" value="sen">
                
                <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a><button class="" type="submit"> Send</button></div>
              </fieldset>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="block">
  <footer>
    <div class="main aligncenter">
      <div class="privacy"><strong>Enigma Spa Salon &copy; 2045 | <a href="privacy-policy.html">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com">TemplateMonster.com</a></strong></div>
    </div>
  </footer>
</div>
</body>
</html>