<?php 
include '../../connexion/connexion.php';
if(isset($_GET['idclient']))
{
    $id=$_GET['idclient'];
    $supprimer=1;
    $req=$connexion->query("UPDATE client set supprimer='$supprimer' where id='$id'");
    if($req)
    {
        header('location:../../views/client.php');
        $mesg="suppression reussie";
        $_SESSION['msg']=$mesg;
    }


}

?>