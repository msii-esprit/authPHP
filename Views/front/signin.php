<?php
session_start() ; 
if (isset($_SESSION["username"]))
{
	if ($_SESSION["role_user"] == "Administrateur")
		header("location:../back/crudUser.php") ; 
	else if ($_SESSION["role_user"] == "User")
	header("location:index.php") ; 
}
$con = mysqli_connect('localhost','root') ; 
mysqli_select_db($con,'gestion_utilisateur') ;
$username = "" ; 
if (isset($_POST['username'])) 
{
	$username = $_POST["username"] ; 
	$password = md5($_POST["password_user"]) ; 

	$req = "select * from utilisateurs where username='$username' and password_user='$password'" ; 
	$result = $con->query($req) ; 

	if ($result->num_rows>0) 
	{
		$_SESSION['username'] = $username ;
		while ($row = $result->fetch_assoc()) 
		{
			$_SESSION['nom_prenom_user'] = $row['nom_user'] ." " .$row['prenom_user'];
			$_SESSION['email_user'] = $row['email_user'];
			$_SESSION['tel_user'] = $row['tel_user'];
			$_SESSION['id_user'] = $row['id_user'] ;
			$_SESSION['username'] = $row['username'] ;
			$_SESSION['role_user'] = $row['role_user'];
      $_SESSION['verified'] = $row['verified'];
		}
		if ($_SESSION["role_user"] == "Administrateur")
			header("location:../back/crudUser.php") ; 
		else if (($_SESSION["role_user"] == "User") || $_SESSION["role_user"] == "Chauffeur" )
			header("location:index.php") ; 
		die ; 

	} else {
		?>
    <script>
      alert('invalid credentials');
    </script>
    <?php
	}
}
?>	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Enigma Spa Salon | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<script>
$(document).ready(function () {
    $('body').bgStretcher({
        images: ['images/slide-1.jpg'],
        imageWidth: 1600,
        imageHeight: 964,
        resizeProportionally: true
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
            <h2>Sign In</h2>
            
            <dl class="address">
              <dt>Welcome back ...<br>
            </dl>
          </article>
          <article class="grid_5 prefix_2">
            <h3>Sign in</h3>
            <form id="contact-form" method="POST" action="">
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
                <a href="forgotPassword.php" ><p>forgot your password?</p></a>
               

                
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