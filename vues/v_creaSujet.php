<?php

require_once('m_connect.php');

if(!empty($_POST)){

    if(!empty($_POST['message'])){

        $_POST['message'] = htmlspecialchars($_POST['message']);
        
        extract($_POST);

        $statement = $pdo->prepare("INSERT INTO message VALUES(NULL,NULL, :message)");
        $statement->bindParam('message', $message, PDO::PARAM_STR);
        $statement->execute();

        header('location:'.$_SERVER['PHP_SELF']);
        exit();
    }
} else{
    $erreurs[] = "Merci de remplir tous les champs";
}
