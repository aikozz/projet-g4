<?php
function classement(){
    require("./modele/user.php");
    $tab = getUpvote();
  
    require("./vues/v_classement.php");


}

function acc(){
    require("./vues/v_accueil.php");
    
}

?>