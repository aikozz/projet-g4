<?php 
session_start();

if(!isset($_REQUEST['uc']))
	$uc = 'connexion';
else
	$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':
		{
			include("vues/v_connexion.php");
			break;
		}
}

?>
