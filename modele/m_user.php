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
    $sql_user="SELECT * FROM user WHERE pseudo=:login AND mdp=:pass";
    //requete admin(TODO)
    $res_user = array();
    //resultat requete admin(TODO)

    try{
        $cde_user = $pdo->prepare($sql_user);
        $cde_user->bindParam(':login', $login);
        $cde_user->bindParam(':pass', $pass);
        $b_user = $cde_user->execute();

        //verif admin(TODO)
        //
        //
        //
        //

        if($b_user){
            $res_user = $cde_user->fetchAll(PDO::FETCH_ASSOC);
            //res tab admin(TODO)
        }
    }
    catch (PDOException $e){
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die();
    }
    $profil = array();
    return false;
}


?>