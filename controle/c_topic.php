<?php

function searchBar(){
   
    
    $n = isset($_POST['idTop'])?($_POST['idTop']):'' ;

    require("./modele/m_topic.php");
    $tab=searchTop($n);
    
    require("./vues/v_search.php");
    
}

?>