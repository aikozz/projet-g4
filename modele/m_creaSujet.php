<?php

function addMessage($message){
    require("./modele/m_connect.php");

    try{
        $statement = $pdo->prepare("INSERT INTO topic VALUES(NULL,NULL, :message)");
        $statement->bindParam('message', $message, PDO::PARAM_STR);
        $statement->execute();
    }
    catch (PDOException $e){
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die();
    }
}