<?php
//Appel du modèle

include ("../modele/modifier-article.php");
$modif=modifierArticle();
$articleModif=articleAModifier();
//Appel de la vue
include ("../vue/modifier-article.php");

?>