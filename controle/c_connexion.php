<?php

function connexion(){
    require("./vues/v_connexion.php"); //J'ai mis ça juste le temps que tu code vraiment le back (Walid)

}

function iden(){
    $login= $_POST['login'];
    $pass=$_POST['pass'];
    require("./modele/m_user.php");
}

?>
