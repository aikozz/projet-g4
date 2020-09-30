<?php

function searchBar(){
   
    
    $n = isset($_POST['idTop'])?($_POST['idTop']):'' ;

    require("./modele/m_topic.php");
    $tab=searchTop($n);
    
    require("./vues/v_search.php");
    
}

function showTop(){
    $id = $_GET['id'];
    require("./modele/m_topic.php");
    $listeTop = listeTop($id);
    $name=$_GET['nom'];
    require("./vues/v_topic.php");
}


?>