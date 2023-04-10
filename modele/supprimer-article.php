<?php
function supprimerArticle(){
	if(isset($_GET['id'])){
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
			
		// Suppression
		$req = $bdd->prepare('DELETE FROM articles WHERE id = :id');
		$req->execute(array(
		 'id' => $_GET['id']
		 ));
		return true;
	}else{
		return false;
	}
}
?>
