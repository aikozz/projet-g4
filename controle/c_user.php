<?php
function classement(){
    require("./modele/m_user.php");
    $tab = getUpvote();
  
    require("./vues/v_classement.php");


}

function acc(){
    require("./vues/v_accueil.php");
    
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
        }else{
             $_SESSION['profil'] = $profil;
             
                  require("./vues/v_accueil.php");
            
            
        }

    
    }
    
}
function profil(){
    require("./modele/m_user.php");
    require("./vues/v_profil.php");
}
function modificationProfil(){
    $nom = isset($_POST['nom'])?($_POST['nom']):'';
    $prenom = isset($_POST['prenom'])?($_POST['prenom']):'';
    $email = isset($_POST['email'])?($_POST['email']):'';
    $username = isset($_POST['pseudo'])?($_POST['pseudo']):'';
    $mdp = isset($_POST['mdp'])?($_POST['mdp']):'';
    $id = $_SESSION['profil']['id_user'];

    require("./modele/m_user.php");

    if(mailExiste($email)){
        $msg ="mail déjà existant";
        require("./vues/v_profil.php");

    }
    if(pseudoExiste($username)){
        $msg ="pseudo déjà existant";
        require("./vues/v_profil.php");

    }
    else{ 
    
        modifProfil($nom,$prenom,$email,$username,$mdp,$id);
        $modif="Profil bien modifier";
        require("./vues/v_profil.php");
        
     }

}
function bye(){
    session_destroy();
    connexion();
}

function signup(){
    $nom = isset($_POST['nom'])?($_POST['nom']):'';
    $prenom = isset($_POST['prenom'])?($_POST['prenom']):'';
    $email = isset($_POST['email'])?($_POST['email']):'';
    $username = isset($_POST['pseudo'])?($_POST['pseudo']):'';
    $mdp = isset($_POST['mdp'])?($_POST['mdp']):'';

   
    require("./modele/m_user.php");

    if(mailExiste($email)){
        $msg ="mail déjà existant";
        require("./vues/v_connexion.php");

    }
    if(pseudoExiste($username)){
        $msg ="pseudo déjà existant";
        require("./vues/v_connexion.php");


    }
    else { 
    
       createAcc($nom,$prenom,$email,$username,$mdp);
     
    
         $creat="compte bien créé";
        require("./vues/v_connexion.php");
       
    }

 
}
   function connexion(){
        require("./vues/v_connexion.php"); //J'ai mis ça juste le temps que tu code vraiment le back (Walid)
    
    }
?>