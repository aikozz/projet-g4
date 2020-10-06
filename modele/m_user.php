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
function pseudoExiste($pseudo){
    
    require("./modele/m_connect.php");
    $sql= "SELECT * FROM user WHERE pseudo=:pseudo";
        $cde_user  = $pdo->prepare($sql);
        $cde_user -> bindValue(":pseudo",$pseudo);
        $b_Question = $cde_user ->execute();
      
        
        if($b_Question )
        $res_user = $cde_user->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($res_user))
            return false;
        else return true;

}

function mailExiste($email){
    require("./modele/m_connect.php");
    $sql= "SELECT * FROM user WHERE email=:email";
        $cde_user  = $pdo->prepare($sql);
        $cde_user -> bindValue(":email",$email);
        $b_Question = $cde_user ->execute();
      
        
        if($b_Question )
        $res_user = $cde_user->fetchAll(PDO::FETCH_ASSOC);
   
        if(isset($res_user))
            return false;
        else return true;

        


            

}


function checkIdent($login,$pass,&$profil){
    require("./modele/m_connect.php");
    $sql_user="SELECT * FROM user WHERE pseudo=:lo AND mdp=:pass";
    //requete admin(TODO)
    $res_user = array();
    //resultat requete admin(TODO)

    try{
        $cde_user = $pdo->prepare($sql_user);
        $cde_user->bindParam(':lo', $login);
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
    if(count($res_user) >0){
        $profil = $res_user[0];
        return true;
    }
    $profil = array();
    return false;
}
function modifProfil($nom,$prenom,$email,$username,$mdp,$id){
    require("./modele/m_connect.php");
    $sql_modif = $pdo->prepare("UPDATE user 
    SET nom = :nom, prenom = :prenom, email = :email, pseudo = :pseudo, mdp = :mdp 
    WHERE id_user = :id 
    AND nom IS NOT NULL 
    AND prenom IS NOT NULL 
    AND email IS NOT NULL 
    AND pseudo IS NOT NULL 
    AND mdp IS NOT NULL");
    $sql_modif->bindParam(':nom', $nom);
    $sql_modif->bindParam(':prenom', $prenom);
    $sql_modif->bindParam(':email', $email);
    $sql_modif->bindParam(':pseudo', $username);
    $sql_modif->bindParam(':mdp', $mdp);
    $sql_modif->bindParam(':id', $id);
    $sql_modif->execute();
}
function createAcc($nom,$prenom,$email,$pseudo,$mdp){
	require ("./modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO user(nom, prenom, email,pseudo,mdp,nb_vote,administrateur) VALUES(:nom, :prenom, :email,:login_etu,:pass_etu,0,0)");
  

    $bd-> bindparam(':nom',$nom);
   
    $bd-> bindparam(':prenom',$prenom);
   
    $bd-> bindparam(':email',$email);
   
    $bd-> bindparam(':login_etu',$pseudo);
   
    $bd-> bindparam(':pass_etu',$mdp);
    
 
	$bd->execute();
    


}

function getNameUser($id){
    require("./modele/m_connect.php");
    $sql= "SELECT pseudo FROM user WHERE id_user=:id";
    
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question -> bindValue(":id",$id);
        $cde_Question ->execute();
      
            $data= $cde_Question->fetch();
            $ret = $data[0];
            return $ret;

}



?>