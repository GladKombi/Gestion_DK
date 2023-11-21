<?php
#modification
if(isset($_POST['modif'])){
    $categorie=$_POST['categorie']; 
    if (!empty($categorie)) 
    {
       $id=$_GET['edit_category'];
       $pdo->query(" UPDATE categorie SET description='$categorie' WHERE id='$id'");
       echo "<script>alert('Modification réussie')</script>";
       header("location:categorie.php");
    }
    else{
        echo "<script>alert('Completer tous les champs')</script>";
    }
  }
?>