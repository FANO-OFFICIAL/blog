<?php
function testConnexion(){
	if(isset($_POST['email']) AND isset($_POST['motdepasse'])){
		try
		{
			// On se connecte à MySQL à la base de donnée test
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

		//Récupération de l'email
		$email=$_POST['email'];
		
		//Récupération du mot de passe
		$pass = $_POST['motdepasse'];
		
		// Vérification des identifiants
		$req = $bdd->prepare('SELECT id FROM admin WHERE email = :email AND pass = :pass');
		$req->execute(array('email' => $email,'pass' => $pass));
		
		//On récupère une ligne 
		$resultat = $req->fetch();
	}
	else{
		//Acces réfusé
		$resultat=false;
	}	
	return $resultat;	
}
?>
