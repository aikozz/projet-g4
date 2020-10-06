<?php

function show(){
    $id = $_GET['id'];
   
    require("./modele/m_mess.php");
    require("./modele/m_topic.php");
    require("./modele/m_user.php");
    $titre= getTopic($id);
    $tab = listeMess($id);

    $prems = firstMess($id);
   
    require("./vues/v_mess.php");
}
?>