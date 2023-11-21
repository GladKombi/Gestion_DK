<?php
#suppression
if (isset($_GET['delete_produit']) && !empty($_GET['delete_produit'])) {
  $idSup=$_GET['delete_produit'];
$connexion->query(" update produit set supprimer=1  WHERE id='$idSup'");
if($connexion){
    echo "<script>alert('Suppression réussie')</script>";
   // header('location:../../views/categorie.php');
 }
}
?>