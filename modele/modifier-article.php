<?php
session_start();
function articleAModifier(){
	if (isset($_GET['id'])){
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
		$req = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
		$req->execute(array('id' => $_GET['id']));
		return $req;
	}else{
		return false;
	}
}

function modifierArticle(){
	//Si les champs du formulaire ont été saisis, on peut modifier
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
		// Modification
		$req = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu, date = CURDATE() WHERE id = :id');
		$req->execute(array('titre' =>$_POST['titre'],'contenu' =>$_POST['contenu'],'id' =>$_GET['id']));
		
		return true;
	}else{
		return false;
	}
}
?>
