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
    echo '<p class="alert alert-danger"> '.$msg .'</p>';
    echo '<p class="alert alert-success">'.$modif.'</p>';
    ?>
    
        <div class="container">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Votre Profil Utilisateur</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="index.php?controle=c_user&action=modificationProfil">
                                    <div class="form-group row">
                                        <label for="nom" class="col-4 col-form-label">Nom : </label>
                                        <div class="col-8">
                                        <input type="text" name="nom" class="form-control here" placeholder="<?php echo $_SESSION['profil']['nom'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom" class="col-4 col-form-label">Prénom : </label>
                                        <div class="col-8">
                                        <input type="text" name="prenom" class="form-control here" placeholder="<?php echo $_SESSION['profil']['prenom'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom" class="col-4 col-form-label">E-mail : </label>
                                        <div class="col-8">
                                        <input type="email" name="email" class="form-control here" placeholder="<?php echo $_SESSION['profil']['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom" class="col-4 col-form-label">Pseudo : </label>
                                        <div class="col-8">
                                        <input type="text" name="pseudo" class="form-control here" placeholder="<?php echo $_SESSION['profil']['pseudo'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom" class="col-4 col-form-label">Mot de passe : </label>
                                        <div class="col-8">
                                        <input type="text" name="nom" class="form-control here" placeholder="<?php echo $_SESSION['profil']['mdp'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group now">
                                        <div class="offset-4-col-8">
                                            <button class="btn" name="submit" type="submit">Enregistrer les modifications
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--<table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Votre Profil Utilisateur</th>
        </tr>
        </thead>
        <tr>
           
                <td>nom:<input type="text" name="nom" placeholder=""></td>
                <td>prenom:<input type="text" name="prenom" placeholder=""></td>
                <td>email:<input type="email" name="email" placeholder=""></td>
                <td>pseudo:<input type="text" name="pseudo" placeholder=""></td>
                <td>mdp:<input type="text" name="mdp" placeholder=""></td>
                
        </tr>
    </table>
    <input type="submit" name="modif" value="Modifier">-->
        </div>
</body>
<footer>
    <?php require("./vues/v_pied.php"); ?>
</footer>

</html>