<?php
//GestActivites.php
//Date de création: 13.12.2016
//Auteur: CHZ
//____________________________
ob_start();
if(isset($resultats)){
	$ligne=$resultats->fetch();
	$_SESSION['IDUser']=$ligne['IDVisiteurs'];
	$_SESSION['LoginUser']=$ligne['Login'];
	$_SESSION['NomPrenom']=$ligne['Nom']." ".=$ligne['Prenom'];;
}
?>

<section id="work">
	<div class="container">
   <div class="row">
     <div class="col-md-12">
       <div id="login">
         <form class="form" method="POST" action="index.php?action=homepage">
            <table class="table">
              <tr>
                <td>Login : </td><td><input type="text" placeholder="Entrez votre login" name="flogin" value="<?= @$_POST['flogin']; ?>" /></td>
              </tr>
              <tr>
                <td>Password : </td><td><input type="password" placeholder="Entrez votre password" name="fpasswd" /></td>
              </tr>
              <tr>
                <td><input class="btn" type="submit" value="login" /></td><td><input type="reset" class="btn"value="effacer"/></td>
              </tr>
            </table>
         </form>
       </div>
     </div>
   </div>
	</div>
</section>

<?php
	$content=ob_get_clean();
	require 'gabarit.php';
?>
