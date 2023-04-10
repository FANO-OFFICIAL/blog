<?php
//Appel du modèle
include ("../modele/afficher-article.php");

$listeArticles=afficherArticle();

//Appel de la vue
include ("../vue/blog.php");

?>