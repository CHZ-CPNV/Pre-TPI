<?php
//GestActivites.php
//Date de création: 13.12.2016
//Auteur: CHZ
//____________________________
ob_start();
?>
<?php
if (isset($resultat))
  $ligne=$resultat->fetch();
if (isset($ligne['IDAbris'])) :
?>
<article>
  <form class="form" method="POST" action="index.php?action=editAbris">
    <table class="table">
      <tr>
        <td>IDAbris : </td><td><input type="text" value="<?=$ligne['IDAbris'];?>" disabled />
        <input type="hidden"  name="fIDAbris"  value="<?=$ligne['IDAbris'];?>">
        <td>
      </tr>
      <tr>
        <td>Etat : </td><td><input type="text" value="<?=$ligne['Etat'];?>" name="fEtat" required /></td>
      </tr>
      <tr>
        <td>Latitude : </td><td><input type="text" value="<?=$ligne['Lat'];?>" name="fLat" required /></td>
      </tr>
      <tr>
        <td>Longitude : </td><td><input type="text" value="<?=$ligne['Lng'];?>" name="fLng" required /></td>
      </tr>
      <tr>
        <td>Nomde de place : </td><td><input type="text" value="<?=$ligne['NombrePlace'];?>" name="fNombrePlace" required /></td>
      </tr>
      <tr>
        <td>N°Abris : </td><td><input type="text" value="<?=$ligne['N°Abris'];?>" name="fNumAbris" required /></td>
      </tr>
      <tr>
        <td><input class="btn" type="submit" value="Modifier" /></td><td><input type="reset" class="btn"value="effacer"/></td>
      </tr>
    </table>
  </form>
<?php else : ?>
L'abris a bien été modifié !
<?php endif; ?>
</article>
<?php
	$content=ob_get_clean();
	require 'gabarit.php';
?>
