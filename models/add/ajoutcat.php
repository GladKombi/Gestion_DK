<?php
include('../connexion/connexion.php');

if(isset($_POST['valider'])){
    $designation=$_POST['description'];
    //select data from database
    $req=$connexion->query("select * from `categorie` where description='$designation'");
   ($tab=$req->fetch());
    if($tab>0){
        echo "<script>alert('cette categorie existe dejà dans la base de données')</script>";  
    }else{  
    $req=$connexion->prepare("INSERT INTO categorie(description) values (?)");
    $req->execute([$designation]);
    if($req){
        echo "<script>alert('la categorie a été inserer avec succès')</script>";
    }
    
}
}
?>
