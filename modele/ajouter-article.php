<?php
session_start();
function ajouterArticle(){
	//Si les champs du formulaire ont été saisis
	if(isset($_POST['titre']) AND isset($_POST['contenu'])){
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
		
		// Insertion
		$req = $bdd->prepare('INSERT INTO articles(titre, auteur, date,
		contenu) VALUES(:titre, :auteur, CURDATE(), :contenu)');
		$req->execute(array(
			'titre' => $_POST['titre'],
			'auteur' => $_SESSION['email'],
			'contenu' => $_POST['contenu']));
		return true;
	}	
	return false;	
}
?>
