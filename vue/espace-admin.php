<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Espace admin</title>
	</head>
	<body>
		<?php
			if (isset($_SESSION['id']) AND isset($_SESSION['email'])){
		?>
			<h1>Espace admin</h1>
			<p><a href="../controleurs/deconnexion.php">Déconnexion</a></p>
			<h2>Articles</h2>
			<p><a href="../controleurs/ajouter-article.php">Ajouter</a></p>
			<?php
				if($suppArticle){
					echo "<p style='color:green'>Article supprimé</p>";
				}
			?>
			<table border>
				<tr>
					<th>Titre</th>
					<th>Auteur</th>
					<th>Date</th>
					<th colspan="2">Actions</th>
				</tr>
			<?php
			// On affiche chaque entrée une à une
			while ($donnees = $listeArticles->fetch())
			{?>
				<tr>
					<td><?php echo $donnees['titre'] ?></td>
					<td><?php echo $donnees['auteur'] ?></td>
					<td>Publié <?php echo $donnees['date'] ?></td>
					<td><a href="../controleurs/modifier-article.php?id=<?php echo $donnees['id']?>">Modifier</a></td>
					<td><a href="../controleurs/espace-admin.php?id=<?php echo $donnees['id']?>">Supprimer</a></td>
				</tr>
			<?php
			}
			$listeArticles->closeCursor(); // Termine le traitement de la requête
			?>
			</table>
			
		<?php
			}else{
		?>
			<h1>Accès réfusé</h1>
		<?php
			}
		?>
	</body>
</html>