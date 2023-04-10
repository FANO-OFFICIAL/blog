<?php
//Appel du modèle

include ("../modele/ajouter-article.php");
$ajout=ajouterArticle();

//Appel de la vue
include ("../vue/ajouter-article.php");

?>