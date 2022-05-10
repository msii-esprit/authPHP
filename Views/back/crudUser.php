<?php
session_start() ; 
if (isset($_SESSION["username"]))
{
	 if ($_SESSION["role_user"] == "User" || $_SESSION["role_user"] == "Chauffeur")
	header("location:../front/index.php") ; 
} else {
    header("location:../front/index.php") ; 
}


	$id_user = "";
	$nom_user = "" ;
	$prenom_user = ""; 
	$email_user = "";
	$tel_user = "";
	$adresse_user = "" ;
	$username = "" ;
	$password_user = "" ;
	$role_user = "" ;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>



    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>

                <span class="logout-spn">
                    <a href="logout.php" style="color:#fff;">LOGOUT</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>


                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>UI Elements <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
                        <a href="blank.html"><i class="fa fa-edit "></i>Blank Page <span class="badge">Included</span></a>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <form method="POST" action="">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h5>id</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" type="text" name="id_user" value="<?php echo $id_user; ?>" />
                        </div>
                        <h5>nom</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="nom_user" value="<?php echo $nom_user; ?>" />
                        </div>
                        <h5>prenom</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="prenom_user" value="<?php echo $prenom_user; ?>" />
                        </div>

                        <h5>email</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="email" class="form-control" name="email_user" value="<?php echo $email_user; ?>" />
                        </div>
                        <h5>telephone</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="number" class="form-control" name="tel_user" value="<?php echo $tel_user; ?>" />
                        </div>
                        <h5>adresse</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="adresse_user" value="<?php echo $adresse_user; ?>" />
                        </div>
                        <h5>username</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" />
                        </div>
                        <h5>password</h5>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="password" class="form-control" name="password_user" value="<?php echo $password_user; ?>" />
                        </div>
                        <div class="input-group">
                            <select style="width: 167px;" class="input" id="role_user" name="role_user">
                                <option <?= $role_user == 'Administrateur' ? 'selected="selected"' : ''; ?> value="Administrateur">Administrateur</option>
                                <option <?= $role_user == 'User' ? 'selected="selected"' : ''; ?> value="User">User</option>
                            </select>
                        </div>
                        <button type="submit" name="ajouter_utilisateur" class="btn btn-primary">ajouter</button>
                        <button type="submit" name="modifier_utilisateur" class="btn btn-success">modifier</button>
                        <button type="submit" name="supprimer_utilisateur" class="btn btn-danger">supprimer</button>
                    </div>
                    </form>
                </div>
                <div class="row">
                    <?php
                    include_once '../../config.php' ; 
					include 'ajouterUtilisateur.php' ;
					include 'modifierUtilisateur.php' ;
					include 'supprimerUtilisateur.php' ;
                        include 'afficherUtilisateur.php';
                    ?>
                </div>
                <!-- /. ROW  -->
                <hr />

                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
            </div>
        </div>
    </div>


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>