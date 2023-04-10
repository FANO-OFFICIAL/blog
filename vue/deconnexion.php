<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Déconnexion</title>
	</head>
	<body>
		<?php
			session_start();
			// Suppression des variables de session et de la session
			$_SESSION = array();
			session_destroy();
		?>
		<h1>Déconnexion réussie</h1>
		<p><a href="../index.php">Retour à l'accueil</a></p>
	</body>
</html>