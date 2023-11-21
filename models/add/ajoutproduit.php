<?php
session_start();
include('../../connexion/connexion.php');

if(isset($_POST['valider'])){
    $nom=htmlspecialchars($_POST['nom']);
    $sueil=htmlspecialchars($_POST['sueil']);
    $categorie=htmlspecialchars($_POST['categorie']);
    //echo $categorie;
    //select data from database
    $req=$connexion->query("select * from `produit` where nom='$nom' and supprimer=0");
   ($tab=$req->fetch());
    if($tab>0){
        echo "<script>alert('ce produit existe dejà dans la base de données')</script>";  
    }else{  
    $req=$connexion->prepare("INSERT INTO produit(nom,seuil,categorie) values (?,?,?)");
    $req->execute([$nom,$sueil,$categorie]);
    if($req){
        //echo "<script>alert('le produit a été inserer avec succès')</script>";
        $msg="Enregistrement réussie";
        $_SESSION['msg']=$msg;
        header("location:../../views/produit.php");
    }
    
}

}
?>