<?php
include('../../connexion/connexion.php');
#modification
if(isset($_POST['modif'])){
  $nom=htmlspecialchars($_POST['nom']);
  $description=htmlspecialchars($_POST['description']);
  $adresse=htmlspecialchars($_POST['adresse']);

  $req=$connexion->prepare("UPDATE `boutique` SET  nom=?,description=?,adresse=? WHERE id='$id'");
  $req->execute([$nom,$description,$adresse]);
  if($req){
      echo "<script>alert('Opération réussi')</script>";
      header("location:../../views/boutique.php");
  }
  }
?>