<?php
session_start();
include_once('../../connexion/connexion.php');

if(isset($_POST['valider'])){
    $designation=$_POST['description'];
    //select data from database
    $req=$connexion->query("select * from `categorie` where description='$designation' and supprimer=0");
   ($tab=$req->fetch());
    if($tab>0){
        echo "<script>alert('cette categorie existe dejà dans la base de données')</script>"; 
         
    }else{  
    $req=$connexion->prepare("INSERT INTO categorie(description) values (?)");
    $req->execute([$designation]);
    if($req){
        $msg="Enregistrement réussie";
        $_SESSION['msg']=$msg;

        header("location:../../views/categorie.php");
    }
    
}
}
?>
