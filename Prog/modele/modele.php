<?php

	// ---------------------------------------------
	// getBD()
	// Date de création : 01.03.2018
	// Fonction : connexion à la BD : instancie et renvoie l'objet PDO
	// Sortie : $connexion
	function getBD(){
		// connexion au serveur MySQL et à la BD snows
		$connexion = new PDO('mysql:host=localhost; dbname=TPI', 'root', '');
		// permet d'avoir plus de déatils sur les erreur retournées
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $connexion;
	}

	// ---------------------------------------------
	// getAbris()
	// Date de création : 01.03.2018
	// Fonction : récupérer les données des classes
	// Sortie : $connexion
	function getAbris(){
		// Connexion à la BD
		$connexion = getBD();

		// Définition de la requête
		$requete = "SELECT * FROM Abris ORDER BY IDAbris";

		$resultats = $connexion->query($requete);
		return $resultats;
	}

	function getLogin($post){
		$connexion = getBD();
		$requete ="SELECT * FROM Visiteurs Where Login='".$post['flogin']."' AND Password='".$post['fpasswd']."'";
		$resultats = $connexion->query($requete);
		return $resultats;
	}
?>
