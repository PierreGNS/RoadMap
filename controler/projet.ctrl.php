<?php
	session_start();
	foreach($_POST as $key=>$value){$$key=$value;}
	foreach($_GET as $key=>$value){$$key=$value;}

	// Connexion à la base de données
	require_once('functions/connection_MYSQL.func.php');

	//
    require_once('class/tache.class.php');
	require_once('modele/tache.modele.php');
    require_once('class/projet.class.php');
	require_once('modele/projet.modele.php');

   	$listeProjets = get_Projets($bdd);

    //affichage
    require_once('includes/head.php');
	require_once('view/projet.vue.php');
    require_once('includes/footer.php');

    $bdd->close();
?>