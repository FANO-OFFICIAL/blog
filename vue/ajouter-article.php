<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modifier - Ajouter article</title>
		<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				mode : "textareas",
				language : "fr_FR"
			});
		</script>
	</head>
	<body>
	<p><a href="../controleurs/espace-admin.php">Retour à la liste d'articles</a></p>
	<h2>Ajouter un article</h2>
	<?php
		if($ajout){
			echo "<p style='color:green'>Enregistré !</p>";
		}
	?>
	<form name="formulaire" id="formulaire" action="../controleurs/ajouter-article.php" method="post">
		<p>
			<h3>Titre de l'article</h3>
			<input required type="text" name="titre" value="">			
		</p>
		<h3>Contenu</h3>
		<textarea id="texte" name="contenu" rows="25"></textarea>
		
		<p><input type="submit" value="Enregistrer">
		<input type="reset" value="Effacer"></p>
	</form>
	</body>
</html>
