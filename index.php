<?php
	// index.php => Routeur

	session_start();
	foreach($_POST as $key=>$value){$$key=$value;}
	foreach($_GET as $key=>$value){$$key=$value;}

	//si aucune action n'est définit, on affiche la page d'accueil
	if(empty($action)){$action="accueil";}
	
	switch($action){
		case "accueil":
			require_once('controler/projet.ctrl.php');
			break;
	}
?>