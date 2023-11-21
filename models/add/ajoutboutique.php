<?php
include('../connexion/connexion.php');

if(isset($_POST['valider'])){
    $nom=$_POST['nom'];
    $description=$_POST['description'];
    $adresse=$_POST['adresse'];
    //select data from database
    $req=$connexion->query("select * from `boutique` where nom='$nom'and description='$description' and adresse='$adresse'");
   $tab=$req->fetch();
    if($tab>0){
        echo "<script>alert('cet élement existe dejà dans la base de données')</script>";  
    }else{  
    $req=$connexion->prepare("INSERT INTO boutique(`nom`, `description`, `adresse`) values (?,?,?)");
    $req->execute([$nom,$description,$adresse]);
    if($req){
        echo "<script>alert('Opération réussi')</script>";
    }
}
}
?>