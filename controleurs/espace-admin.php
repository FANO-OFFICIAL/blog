<?php
//Appel du modèle
include ("../modele/supprimer-article.php");
include ("../modele/afficher-article.php");

$suppArticle=supprimerArticle();
$listeArticles=afficherArticle();

//Appel de la vue
include ("../vue/espace-admin.php");

?>