<?php

	$civilite = htmlspecialchars($_POST["civilite"]);
	$nom = htmlspecialchars($_POST["nom"]);
	$prenom = htmlspecialchars($_POST["prenom"]);
	$mail = htmlspecialchars($_POST["mail"]);
	$tel = htmlspecialchars($_POST["tel"]);

	echo 'Merci ' . $civilite .' ' . $nom . ' !';

	// 1 : on ouvre le fichier
	$monfichier = fopen('Cabrion_orvil.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
	fputs($monfichier, $civilite."\n");
	fputs($monfichier, $nom."\n"); 
	fputs($monfichier, $prenom."\n"); 
	fputs($monfichier, $mail."\n"); 
	fputs($monfichier, $tel."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);


?>