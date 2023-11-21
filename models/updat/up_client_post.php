<?php 
include_once '../../connexion/connexion.php';
if(isset($_POST['valider']))
{
    $id=$_GET['id'];
    $nom=htmlspecialchars($_POST['nom']);
    $postnom=htmlspecialchars($_POST['postnom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $genre=htmlspecialchars($_POST['genre']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $tel=htmlspecialchars($_POST['tel']);
    $req=$connexion->query("SELECT * FROM client where nom='$nom' and postnom='$postnom' and prenom='$prenom' and telephone='$tel' and supprimer=0");
    $existant=$req->fetch();
    if($existant['id']>=1)
    {
        if($genre='M')
        {
            $msg="le client $nom  $postnom $prenom existe deja";
            $_SESSION['msge']=$msg;
            header('location:../../views/client.php');
        }
        else
        {
            $msg="la client $nom $postnom $prenom existe deja";
            $_SESSION['msg']=$msg;
            header('location:../../views/client.php');
        }
    }
    else
    {

   
        $req=$connexion->prepare("UPDATE  client set nom=?,postnom=?,prenom=?,genre=?,adresse=?,telephone=? where id='$id'");
        $req->execute(array($nom,$postnom,$prenom,$genre,$adresse,$tel));
        if($req)
        {
            header('location:../../views/client.php');
            $mesg="Modification reussie";
        }
    }



   
}
