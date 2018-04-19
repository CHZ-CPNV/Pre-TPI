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

<section id="DatajQuery">
  <?php foreach($Coordresultats as $ligne) {?>
    <input type="hidden" id="phpNumA" value="<?=$ligne['NumAbris'];?>">
    <input type="hidden" id="phpNbP" value="<?=$ligne['NombrePlace'];?>">
    <input type="hidden" id="phpLat" value="<?=$ligne['Lat'];?>">
    <input type="hidden" id="phpLng" value="<?=$ligne['Lng'];?>">
  <?php } ?>
</section>

<?php
	$content=ob_get_clean();
	require 'gabarit.php';
?>
