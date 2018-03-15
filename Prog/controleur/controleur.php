<?php

//controleur.php
//Date de création: 01.03.2018
//Auteur: CHZ
//____________________________

require 'modele/modele.php';

function vueConnexion(){
	if(isset($_POST['flogin'])){
		$resultats = getLogin($_POST);
	}
	require 'view/Connexion.php';
}

function vueHomepage(){
	require 'view/Homepage.php';
}

function vueAddAbris(){
	require 'view/Addabris.php';
}

function vueEditAbris(){
	require 'view/Editabris.php';
}

// Affichage des erreurs
function erreur($msgErreur){
	echo $msgErreur;
}
