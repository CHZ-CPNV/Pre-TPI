<?php
//GestActivites.php
//Date de création: 13.12.2016
//Auteur: CHZ
//____________________________
ob_start();
?>

<section id="services">
  <div id="google_map"></div>
</section>

<?php
	$content=ob_get_clean();
	require 'gabarit.php';
?>
