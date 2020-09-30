<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./vues/css/cssProfil.css">
    <title>Votre Profil</title>
</head>

<body>
    <?php require("./vues/v_entete.php"); ?>
    <?php 
    echo '<p class="alert-danger"> '.$msg .'</p>';
    echo '<p class="alert-success">'.$modif.'</p>';
    ?>
     <form method="POST" action="index.php?controle=c_user&action=modificationProfil">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Votre Profil Utilisateur</th>
        </tr>
        </thead>
        <tr>
           
                <td>nom:<input type="text" name="nom" placeholder="<?php echo $_SESSION['profil']['nom'] ?>"></td>
                <td>prenom:<input type="text" name="prenom" placeholder="<?php echo $_SESSION['profil']['prenom'] ?>"></td>
                <td>email:<input type="email" name="email" placeholder="<?php echo $_SESSION['profil']['email'] ?>"></td>
                <td>pseudo:<input type="text" name="pseudo" placeholder="<?php echo $_SESSION['profil']['pseudo'] ?>"></td>
                <td>mdp:<input type="text" name="mdp" placeholder="<?php echo $_SESSION['profil']['mdp'] ?>"></td>
                <?php $_SESSION['profil']['id_user']; ?>
                
        </tr>
    </table>
    <input type="submit" name="modif" value="Modifier">
            </form>
</body>
<footer>
    <?php require("./vues/v_pied.php"); ?>
</footer>

</html>