<?php

	$civilite = htmlspecialchars($_POST["civilite"]);
	$societe = htmlspecialchars($_POST["societe"]);
	$nom = htmlspecialchars($_POST["nom"]);
	$prenom = htmlspecialchars($_POST["prenom"]);
	$mail = htmlspecialchars($_POST["mail"]);
	$tel = htmlspecialchars($_POST["tel"]);
	$commentaire = htmlspecialchars($_POST["commentaire"]);

	echo 'Merci ' . $civilite .' ' . $nom . ' !';

	// 1 : on ouvre le fichier
	$monfichier = fopen('cabrion_orvil.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $civilite."\n");
	fputs($monfichier, $societe."\n");
	fputs($monfichier, $nom."\n"); 
	fputs($monfichier, $prenom."\n"); 
	fputs($monfichier, $mail."\n"); 
	fputs($monfichier, $tel."\n");
	fputs($monfichier, $commentaire."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);


?>