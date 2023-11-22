<?php
include('../../connexion/connexion.php');

if(isset($_POST['valider'])){
    $nombout=htmlspecialchars($_POST['nombout']);
    $description=htmlspecialchars($_POST['description']);
    $adresse=htmlspecialchars($_POST['adresse']);
    //Insertion data from database
    
    $req=$connexion->prepare("INSERT INTO boutique(`nombout`, `description`, `adresse`) values (?,?,?)");
    $req->execute([$nombout,$description,$adresse]);
    if($req){
        echo "<script>alert('Opération réussi')</script>";
        header("location:../../views/boutique.php");
    }
}

?> 