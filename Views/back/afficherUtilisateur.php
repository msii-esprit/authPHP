<?php

    include_once '../../Controller/UtilisateurC.php';

    $utilisateurC = new UtilisateurC() ; 

    
        $listeU = $utilisateurC->afficher_Utilisateur();
    
?>
<head>
    <title>Utilisateurs</title>
    <style>
        .table {
            border:1px solid black;
            border-collapse:collapse;
            color : black ;
            font-weight: bold ;
            text-align: center ;   
            width : 150px;
        }
</style>
</head>
<body>
<div class="col-lg-6 col-md-6">
                        <h5>liste des Utilisateurs</h5>
                        <table class="table table-striped table-bordered table-hover">        <td class="table" >ID</td>
        <td class="table">Nom</td>
        <td class="table">Prénom</td>
        <td class="table">Email</td>
        <td class="table">Téléphone</td>
        <td class="table">Adresse</td>
        <td class="table">Username</td>
        <td class="table">Mot de passe</td>
        <td class="table">Rôle</td>
    </tr>
        <?php
            foreach($listeU as $user) {
        ?>
            <tr style="border:1px solid black;border-collapse:collapse; vertical-align:center; text-align:center;">
                <td><?php echo $user['id_user']; ?></td>
                <td><?php echo $user['nom_user']; ?></td>
                <td><?php echo $user['prenom_user']; ?></td>
                <td><?php echo $user['email_user']; ?></td>
                <td><?php echo $user['tel_user']; ?></td>
                <td><?php echo $user['adresse_user']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password_user']; ?></td>
                <td><?php echo $user['role_user']; ?></td>

            </tr>
        <?php 
            } 
        ?>
    </table>
</div>
</body>
