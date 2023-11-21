<?php
#suppression
if (isset($_GET['delete_category']) && !empty($_GET['delete_category'])) {
  $idSup=$_GET['delete_category'];
$connexion->query(" update categorie set supprimer=1  WHERE id='$idSup'");
if($connexion){
    echo "<script>alert('Suppression réussie')</script>";
   // header('location:../../views/categorie.php');
 }
}
?>