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
//Si accès réfusé alors
if (!$acces)
{?>
	<form class="container" action="../controleurs/connexion.php" method="post">
		<div class="connexion">
			<p class="texteconnexion">ESPACE ADMIN</p>
			<?php
				if(isset($_POST['email']) AND isset($_POST['motdepasse'])){
					if(!$acces){
						echo "<p style='color:red'>Erreur sur l'email ou le mot de passe</p>";
					}
				}
			?>
			<p>Email</p>
			<input type="email" name="email" required>
			<p>Mot de passe</p>
			<input type="password" name="motdepasse" required>
			<br><br>
			<input type="submit" class="confirmationlogin" name="submit" value="Se connecter">
			<br><br>
		</div>
	</form>
<?php
}
else
{
	//Connexion autorisée
	//Création d'une session utilisateur
	session_start();
	$_SESSION['id'] = $acces['id'];
	$_SESSION['email'] = $_POST['email'];
	header("Location: ../controleurs/espace-admin.php");
}
?>
<?php include ("footer.php"); ?>
</body>
</html>
