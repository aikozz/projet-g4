<?php

class PdoF4Speak
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=PdoF4Speak';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoSpeak = null;
	
	private function __construct()
	{
    		PdoF4Speak::$monPdo = new PDO(PdoF4Speak::$serveur.';'.PdoF4Speak::$bdd, PdoF4Speak::$user, PdoF4Speak::$mdp); 
			PdoF4Speak::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoF4Speak::$monPdo = null;
	}


/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoF4Speak = PdoF4Speak::getPdoF4Speak();
 * @return l'unique objet de la classe PdoF4Speak
 */
	public  static function getPdoF4Speak()
	{
		if(PdoF4Speak::$monPdoSpeak == null)
		{
			PdoF4Speak::$monPdoSpeak= new PdoF4Speak();
		}
		return PdoF4Speak::$monPdoSpeak;  
    }
}
?>