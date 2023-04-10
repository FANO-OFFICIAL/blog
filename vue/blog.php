<?php include ("head.php"); ?>

<body>
	<header>
		<nav class="navinformation">
			<li><a href="#">Email: Example@example.fr </a></li>
			<li><a href="#">Téléphone : +33 XX XX XX XX</a></li>
		</nav>
		<div class="container-fluid">
		<div class="iconesocial">
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-pinterest"></i>
			<i class="fab fa-twitter"></i>
		</div>
		<h1>Loreum Ipsun</h1>
		<p class="titre">Loreum Ipsun</p>
		<nav class="barinfo">
				<ul>
					<i class="fas fa-home"></i><li><a href="../index.php">HOME</a></li>
					<i class="fas fa-scroll"></i><li><a href="../controleurs/blog.php">BLOG</a></li>
					<i class="fas fa-user-circle"></i><li><a href="../controleurs/connexion.php">ESPACE ADMIN</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<?php
		// On affiche chaque entrée une à une
		while ($donnees = $listeArticles->fetch())
		{?>
			<div class="article" style="border:1px solid black;margin-bottom:20px">
				
				<h3><?php echo $donnees['titre'] ?></h3>
				<p>
					Publication par <strong><?php echo $donnees['auteur'] ?></strong> 
					le <em><?php echo $donnees['date'] ?></em>
				</p>
				<p><?php echo $donnees['contenu']?></p>
			</div>
		<?php
		}
		$listeArticles->closeCursor(); // Termine le traitement de la requête
	?>
	<?php include ("footer.php"); ?>
</body>
</html>

