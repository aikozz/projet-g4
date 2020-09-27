<?php

function getUpvote(){
    require("./modele/m_connect.php");
    $sql ="SELECT * FROM user ORDER BY nb_vote DESC";
        
        $exe=$pdo->prepare($sql);
       
        $tab = $exe->execute();

        $tabPseudo = array();
        if($tab){
            while($data = $exe->fetch()){
               
                $tabPseudo[] = $data;
                
            }
        }
   
    return $tabPseudo;
}

function checkIdent($login,$pass,&$profil){
    require("./modele/m_connect.php");

}


?>