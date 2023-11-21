<?php
session_start();
include('../../connexion/connexion.php');
#modification
if(isset($_POST['modif'])){
    $categorie=$_POST['categorie']; 
    if (!empty($categorie)) 
    {
       $id=$_GET['edit_category'];
       $connexion->query(" UPDATE categorie SET description='$categorie' WHERE id='$id'");
       if($connexion){
      // echo "<script>alert('Modification réussie')</script>";
      $msg="Modification réussie";
      $_SESSION['msg']=$msg;
       header("location:../../views/categorie.php");
    }
    }
    else{
        echo "<script>alert('Completer tous les champs')</script>";
    }
  }
?>