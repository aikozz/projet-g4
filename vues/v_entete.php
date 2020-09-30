<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="./vues/css/head.css">
   
</head>

<body>
    <div class="container-fluid fondhaut">
        <img src="./vues/img/G4.png" class=" col-12 logo">
    </div>
    <nav>
    <ul class=" list-inline navv"> 
         <li class="list-inline-item space pl-5 pr-5">
            <?php echo "bienvenu ". $_SESSION['profil']['pseudo']; ?>
        </li>
        <li class="list-inline-item space pl-5 pr-5">
            <a class="nav-link nw pl-5" href="index.php"> Accueil </a>
        </li>
        <li class="list-inline-item space pl-5 pr-5">
            <a class="nav-link nw" href="index.php?controle=user&action=classement"> Classement </a>
        </li>
        <?php if($_SESSION['profil']['administrateur'] ==1) echo '<li class="list-inline-item space pl-5 pr-5"><a class="nav-link nw pl-5" href="index.php"> pannel admin </a>  </li>' ?>
      
        <form class="navbar-form list-inline-item    float-right" method="post" action="index.php?controle=c_topic&action=searchBar">
            <div class="form-group">
                <li class="list-inline-item pl-5  ">
                    <input name="idTop" type="text" class="form-control" placeholder="Rechercher">
                </li>
                <li class="list-inline-item pr-5 ">
                    <button type="submit" class="btn btn-sm btn-default nav-link rec ">Rechercher</button>
                </li>
            </div>
        </form>
        <li class="list-inline-item float-right dropdown ">
            <a data-toggle="dropdown" href="#"><img src="./vues/img/prof.png" height="40px" class="nav-link " class=""> </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?controle=c_user&action=profil">Profil</a>
                <a class="dropdown-item" href="index.php?controle=c_user&action=bye">Déconnexion</a>
            </div>
        </li>
    </ul>
    </nav>

</body>

</html>