<?php

function connexion(){
    require("./vues/v_connexion.php"); //J'ai mis ça juste le temps que tu code vraiment le back (Walid)

}

function ident(){
    $login= isset($_POST['login'])?($_POST['login']):'';
    $pass= isset($_POST['pass'])?($_POST['pass']):'';
    $msg='';
    require("./modele/m_user.php");

    if (count($_POST)==0)
        require ("./vues/v_connexion.php");

    else{

        if(!checkIdent($login,$pass,$profil)){

            $_SESSION['profil'] = array();
            $msg = "Votre pseudo ou votre mot de passe n'est pas valide";
            require("./vues/v_connexion.php");
        }

        else{
            $_SESSION['profil'] = $profil;
            $url = "index.php?controle=c_user&action=acc";
            header("Location :" .$url);
        }
    }
    
}

?>
