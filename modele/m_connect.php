<?php

	$hostname = "localhost";	//ou localhosta
	$base= "f4speak";
	$loginBD= "pmauser";	//ou "root"
	$passBD="root";
try {

	$pdo = new PDO ("mysql:server=$hostname; dbname=$base", "$loginBD", "$passBD");
	//die('OK connexion');
}

catch (PDOException $e) {
	die  ("Echec de connexion : " . utf8_encode($e->getMessage()) . "\n");
}

?>