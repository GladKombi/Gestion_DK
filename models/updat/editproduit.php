<?php
session_start();
include '../../connexion/connexion.php';

#modification

if(isset($_POST['modif'])){
    $nom=htmlspecialchars($_POST['nom']);
    $sueil=htmlspecialchars($_POST['sueil']);
    $categorie=htmlspecialchars($_POST['categorie']); 
    if (!empty($nom)&&!empty($sueil)&&!empty($categorie)) 
    {
        $id=$_GET['edit_produit'];
       $connexion->query(" UPDATE produit SET nom='$nom',seuil='$sueil',categorie='$categorie' WHERE id='$id'");
       if($connexion){
       //echo "<script>alert('Modification réussie')</script>";
      
       $msg="Modification réussie";
       $_SESSION['msg']=$msg;
       header("location:../../views/produit.php");
    }
    }
    else{
        echo "<script>alert('Completer tous les champs')</script>";
    }
  }
?>