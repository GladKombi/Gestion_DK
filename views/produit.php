<?php 
session_start();
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
//include('../models/add/ajoutproduit.php');
//include('../models/updat/editproduit.php');
include('../models/delete/deleteproduit.php');
if($_SESSION['msg']!="")
{
    $msg=$_SESSION['msg'];
}

?>



  <!-- CSS Files -->

</head>

<main id="main" class="main">
        <section class="section">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
 
    <div class="container-fluid py-4">
        <div class="row">
        <?php 
            if(isset($_GET['edit_produit'])) 
            {
              $idp=$_GET['edit_produit'];
              $req=$connexion->query("SELECT * FROM produit WHERE id='$idp'  ");
              if ($tab=$req->fetch()) {
                ?>
                <!-- modifier produit -->

                <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Modifier un Produit </h4>
                        <div class="modal modal-signin position-static d-block  py-1" tabindex="-1" role="dialog"
                                id="modalSignin">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header border-bottom-0">
                                        
                                    </div>
                                <div class="modal-body p-5 pt-0">
                                    <form class="row g-3 needs-validation" method="POST" action="../models/updat/editproduit.php?edit_produit=<?=$tab['id']; ?>">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="nom" value="<?=$tab['nom']; ?>" >
                                            <label for="floatingInput">Nom</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="sueil" value="<?=$tab['seuil']; ?>">
                                            <label for="floatingInput">Seuil</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            
                                            
                                            <select class="form-control rounded-4"  id="floatingInput" required name="categorie" id="categorie">
                                            <?php  
                                        $req=$connexion->query("SELECT * from categorie where supprimer=0");
                                        while($categorie=$req->fetch()){ ?>

                                           <option value="<?=$categorie['id']?>" selected><?=$categorie['description']?></option>
                                    <?php } ?>
                                        </select>
                                        <label for="floatingInput">Categorie</label>
                                        </div>


                              

                                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                    name="modif"> Enregister</button> <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
              }
              ?>
          <?php
              }else{

              ?>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">AJouter un Produit </h4>
                        <div class="modal modal-signin position-static d-block  py-1" tabindex="-1" role="dialog"
                                id="modalSignin">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header border-bottom-0">
                                        
                                    </div>
                                <div class="modal-body p-5 pt-0">
                                    <form class="row g-3 needs-validation" method="POST" action="../models/add/ajoutproduit.php" >
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="nom">
                                            <label for="floatingInput">Nom</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="sueil">
                                            <label for="floatingInput">Sueil</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            
                                       
                                            <select class="form-control rounded-4" id="floatingInput" required name="categorie" id="categorie">
                                            <?php  
                                        $req=$connexion->query("SELECT * from categorie where supprimer=0");
                                        while($categorie=$req->fetch()){ ?>

                                           <option value="<?=$categorie['id']?>" selected><?=$categorie['description']?></option>
                                    <?php } ?>
                                        </select>
                                        <label for="floatingInput">Categorie</label>
                                        
                                        </div>

                                        <p class="text-success text-center">
                                            
                                        
                                             <?php if(isset($msg)){
                                                    
                                                ?>
                                                
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <?php echo $msg; $_SESSION['msg']="";?>                                                 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                         
                                            </p>
                                            <?php } ?>
                                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                    name="valider"> Enregister</button> <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

                </div>
                <?php
                 }
                ?>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Listes de Produits</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Seuil</th>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $n=0;
                                $req=$connexion->query("SELECT produit.`id`,produit. `nom`, produit.`seuil`, categorie.description FROM `produit`,categorie WHERE produit.categorie=categorie.id and produit.supprimer=0");
                                while($cat=$req->fetch()){
                                    $n++;
                                ?>
                            <tr>
                                <th scope="row"><?= $n;?></th>
                                <td> <?= $cat["nom"] ?></td> 
                                <td> <?= $cat["seuil"] ?></td> 
                                <td> <?= $cat["description"] ?></td> 
                                <td><a href='produit.php?edit_produit=<?=$cat['id'] ?>' class='text-primary'><i class='bi-solid bi bi-pencil-square text-primary'></i></a></td>
                                <td><a href='produit.php?delete_produit=<?=$cat['id'] ?>'onclick="return confirm('Voulez-vous vraiment supprimer ?')"  type="button" 
                                class="text-primary">
                                <i class='bi-solid bi bi-trash text-primary'></i></a></td>                       
                                                            </tr>                
                                                            <?php
                                                              }
                                                              ?>

                               
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>

            </div>
    </div>
  </main>
  </section>

</main><!-- End #main -->