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
	$Coordresultats = getCoordAbris();
	require 'view/Homepage.php';
}

function vueAddAbris(){
	require 'view/Addabris.php';
}

function vueEditAbris(){
	if(isset($_GET['fIDAbris'])){
		$resultats = getAbris($_GET['fIDAbris']);
		require 'view/Editabris.php';
		exit();
	} else{
		updAbris($_POST);
		require 'view/Editabris.php';
	}
}

function vuePublipostage(){
	$Visiteursresultats = getVisiteurs();
	require 'view/Publipostage.php';
}

// Affichage des erreurs
function erreur($msgErreur){
	echo $msgErreur;
}
