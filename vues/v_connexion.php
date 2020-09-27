<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="vues/css/cssConnexion.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <title>F4SPEAK</title>
</head>

<body>
    <div class="container col-sm-4">
        <ul class="nav nav-tabs">

            <li><a class="nav-item nav-link active" href="#p1" data-toggle="tab">Connexion</a></li>
            <li><a class="nav-item nav-link" href="#p2" data-toggle="tab">Inscription</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="p1">
                <form method="post" action="index.php?controle=c_connexion&action=check">
                    <div class="form-group">
                        <label for="username">Identifiant : </label>
                        <input type="text" name="login" class="form-control" placeholder="Entrez votre pseudo..." name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe : </label>
                        <input type="password" name="pass" class="form-control" placeholder="Entrez votre mot de passe..."
                            name="mdp" required>
                    </div>
                    <input type="submit" class="btn" name="connection" value="Se connecter">
                </form>
            </div>

            <div class="tab-pane fade" id="p2">
                <form>
                    <div class="form-group">
                        <label for="nom">Nom : </label>
                        <input type="text" class="form-control" placeholder="Entrez votre nom..." name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom : </label>
                        <input type="text" class="form-control" placeholder="Entrez votre prénom..." name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">E-mail : </label>
                        <input type="mail" class="form-control" placeholder="Entrez votre e-mail..." name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="pseudo">Pseudo : </label>
                        <input type="text" class="form-control" placeholder="Entrez votre pseudo..." name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe : </label>
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe..." name="id"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="verifMdp">Vérification Mot de passe : </label>
                        <input type="password" class="form-control"
                            placeholder="Entrez une deuxieme fois votre mot de passe..." name="id" required>
                    </div>
                    <input type="submit" class="btn" name="inscription" value="S'inscrire">
                </form>
            </div>
        </div>
    </div>
</body>
</html>