<?php

function searchTop($search){
    require("./modele/m_connect.php");
    $sql= "SELECT * FROM topic WHERE titre LIKE :titre";
    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question -> bindValue(":titre",'%'.$search .'%');
        $b_Question = $cde_Question ->execute();
      
        $tabIdQuestion = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabIdQuestion [] = $tab;

            }
            
        }
    }
    catch (PDOException $e) {
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
    }
    return $tabIdQuestion;

}


?>