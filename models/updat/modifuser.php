<?php
include('../../connexion/connexion.php');

if(isset($_POST['valider'])){
    $id=$_GET['iduser'];
    $nom=htmlspecialchars($_POST['nom']);
    $postnom=htmlspecialchars($_POST['postnom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $genre=htmlspecialchars($_POST['genre']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $telephone=htmlspecialchars($_POST['telephone']);
    $email=htmlspecialchars($_POST['email']);
    $pwd=htmlspecialchars($_POST['pwd']);
    $boutique=htmlspecialchars($_POST['boutique']);
   
     //select data from database
    
      $req=$connexion->prepare("UPDATE `utilisateur` SET  nom=?,postnom=?,prenom=?,genre=?,adresse=?,telephone=?,email=?,pwd=?,boutique=? WHERE id='$id'");
      $req->execute([$nom,$postnom,$prenom,$genre,$adresse,$telephone,$email,$pwd,$boutique]);
      if($req){
          echo "<script>alert('Opération réussi')</script>";
          header("location:../../views/users.php");
      }
}

?>