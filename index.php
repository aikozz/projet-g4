<?php
session_start();
require_once("lib/fonctions.php");
include("modele/class.pdoF4Speak.php");
include("vues/v_entete.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoF4Speak::getPdoF4Speak();	

switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
}
include("vues/v_pied.php") ;
?>

