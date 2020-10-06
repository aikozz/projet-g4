<?php
    function listeMess($id){
        require("./modele/m_connect.php");
        $sql= "SELECT * FROM messages WHERE id_topic=:id AND isPrems = false ORDER BY upVote DESC";
        try{
            $cde_Question  = $pdo->prepare($sql);
            $cde_Question -> bindValue(":id",$id);
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

    function firstMess($id){
        require("./modele/m_connect.php");
        $sql= "SELECT * FROM messages WHERE id_topic=:id AND isPrems = true";
        try{
            $cde_Question  = $pdo->prepare($sql);
            $cde_Question -> bindValue(":id",$id);
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



