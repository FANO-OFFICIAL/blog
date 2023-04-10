<?php

function afficherArticle(){
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
		
	// On récupère tous les articles
	$req = $bdd->query('SELECT * FROM articles');
	
	return $req;	
}
?>
