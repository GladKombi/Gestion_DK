<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
if (isset($_GET['idbout']))
{
 $id=$_GET['idbout'];
 $req=$connexion->query("SELECT * FROM boutique WHERE id=$id");
 $tab=$req->fetch();
}

 //  suppression une affectation 
 if (isset($_GET['idSupcat']) && !empty($_GET['idSupcat'])) {
    $id=$_GET['idSupcat'];
    $supprimer=1;
    $req=$connexion->query("UPDATE `boutique` SET supprimer='$supprimer' WHERE id=$id");
    if($req){
       header("Location:boutique.php");
    }
   
  }
?>

</head>

<main id="main" class="main">
        <section class="section">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
  <div class="container-fluid py-4">
        <div class="row">
       

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                    <?php if (isset($_GET['idbout'])) { ?>
                            <h4 class="card-title text-center">Modifier Boutique </h4>
                            <?php }
                            else{  ?>
                              <h4 class="card-title text-center">Ajouter Boutique </h4>
                              <?php
                            }
                            ?>
                        <div class="modal modal-signin position-static d-block  py-1" tabindex="-1" role="dialog"
                                id="modalSignin">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header border-bottom-0">
                                        
                                    </div>
                                <div class="modal-body p-5 pt-0">
                                    <form class="row g-3 needs-validation" <?php if (isset($_GET['idbout'])) { ?>action="../models/updat/modifboutique.php?idbout=<?php echo $_GET['idbout']?>" 
                          
                          <?php }
                             else{  ?> action="../models/add/ajoutboutique.php"   <?php
                             }
                             ?> method="POST" novalidate>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="nombout" <?php if (isset($_GET['idbout'])) { ?> value="<?php echo $tab['nombout']; ?> <?php }?>">
                                            <label for="floatingInput">Nom</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="description" <?php if (isset($_GET['idbout'])) { ?> value="<?php echo $tab['description']; ?> <?php }?>">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="adresse" <?php if (isset($_GET['idbout'])) { ?> value="<?php echo $tab['adresse']; ?> <?php }?>">
                                            <label for="floatingInput">Adresse</label>
                                        </div>


                                        <p class="text-success text-center">
                                            

                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="bi bi-check-circle me-1"></i>
                                                                                                   
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                         
                                            </p>

                                            <?php if (isset($_GET['idbout'])) {  ?>
  
                                                     <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                                        name="valider"> Modifier</button> <br>
                                                     <?php }
                                                         else{  ?>
                                                     <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                                        name="valider"> Enregister</button> <br>
                                                          <?php
                                                             }
                                                           ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


                </div>

                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Listes des Boutique</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Adresse</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $n=0;
                                $req=$connexion->query("SELECT * from boutique WHERE supprimer=0");
                                while($idbout=$req->fetch()){
                                    $n++;
                                ?>
                            <tr>
                                <th scope="row"><?= $n;?></th>
                                <td> <?= $idbout["nombout"] ?></td> 
                                <td> <?= $idbout["description"] ?></td>
                                <td> <?= $idbout["adresse"] ?></td>
                                <td><a href='boutique.php?idbout=<?=$idbout['id'] ?>' class='text-primary'><i class='bi-solid bi bi-pencil-square text-primary'></i></a>
                                <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')" href='boutique.php?idSupcat=<?=$idbout['id'] ?>' type="button" 
                                class="text-primary">
                                <i class='bi-solid bi bi-trash text-primary'></i></a></td>                       
                                                            </tr>                
                                                            <?php
                                                              }
                                                              ?>
                               
                                </tbody>

                               
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