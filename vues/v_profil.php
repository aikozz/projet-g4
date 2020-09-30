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
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Votre Profil Utilisateur</th>
        </tr>
        </thead>
        <tr>
            <form method="POST" action="index.php?controle=c_user&action=modificationProfil">
                <td><input type="text" name="nom" value="<?php echo $_SESSION['profil']['nom'] ?>"></td>
                <td><input type="text" name="prenom" value="<?php echo $_SESSION['profil']['prenom'] ?>"></td>
                <td><input type="email" name="email" value="<?php echo $_SESSION['profil']['email'] ?>"></td>
                <td><input type="text" name="pseudo" value="<?php echo $_SESSION['profil']['pseudo'] ?>"></td>
                <td><input type="text" name="mdp" value="<?php echo $_SESSION['profil']['mdp'] ?>"></td>
                <?php $_SESSION['profil']['id_user']; ?>
                <input type="submit" name="modif" value="Modifier">
            </form>
        </tr>
    </table>
</body>
<footer>
    <?php require("./vues/v_pied.php"); ?>
</footer>

</html>