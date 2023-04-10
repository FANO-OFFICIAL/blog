<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modifier article</title>
		<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			tinyMCE.init({
				mode : "textareas",
				language : "fr_FR"
			});
		</script>
	</head>
	<body>
	<?php
		$donnees=$articleModif->fetch();
	?>
	<p><a href="../controleurs/espace-admin.php">Retour à la liste d'articles</a></p>
	<h2>Modifier un article</h2>
	<?php
		if($modif){
			echo "<p style='color:green'>Article modifié !</p>";
		}
	?>
	<form name="formulaire" id="formulaire" action="../controleurs/modifier-article.php?id=<?php echo $_GET['id'];?>" method="post">
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">	
		<p>
			<h3>Titre de l'article</h3>
			<input required type="text" name="titre" value="<?php echo $donnees['titre'];?>">			
		</p>
		<h3>Contenu</h3>
		<textarea id="texte" name="contenu" rows="25">
		<?php echo $donnees['contenu'];?>
		</textarea>
		
		<p><input type="submit" value="Enregistrer">
		<input type="reset" value="Effacer"></p>
	</form>
	</body>
</html>
