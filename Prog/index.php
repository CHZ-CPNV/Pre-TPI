<?php

//index.php
//Date de création: 01.03.2018
//Auteur: CHZ
//____________________________

require 'controleur/controleur.php';

try
{
	if(isset($_GET['action']))
	{
		//Page é afficher
		$page=$_GET['action'];

		switch($page)
		{
			case 'homepage':
				vueHomepage();
				break;
			case 'addAbris':
				vueAddAbris();
				break;
			case 'editAbris':
				vueEditAbris();
				break;
			default:
				throw new Exception("Page non valide");
		}
	}
	else
		vueConnexion();
}
catch (Exception $e)
{
	erreur($e->getMessage());
}
