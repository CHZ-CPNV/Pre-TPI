<?php
//GestActivites.php
//Date de création: 13.12.2016
//Auteur: CHZ
//____________________________
ob_start();
?>
<?php
  $fVisite=fopen('data/visite.csv','r+') or die("Fichier introuvable");

  // Crée la ligne à ajouter
  $ligneNew = $_POST['IDVisiteurs'].";".$_POST['Nom'].";".$_POST['Prenom'].";".$_POST['Login'].";".$_POST['Password']."\n";

  // Récupère la dernière ligne
  $tab = file('data/visite.csv');
  $der_ligne = $tab[count($tab)-1];
  $der_car = $string{strlen($string)-1};

  if ($der_car!= "\n")
    fputs($fVisite, "\n");

  // Insère la ligne en fin de fichier
  file_put_contents ('data/visite.csv', $ligneNew, FILE_APPEND);
  fflush($fVisite);
  fclose($fsnows);
?>
<?php
	$content=ob_get_clean();
	require 'gabarit.php';
?>
