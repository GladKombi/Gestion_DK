<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
 if (isset($_GET['iduser']))
 {
  $id=$_GET['iduser'];
  $req=$connexion->query("SELECT * FROM `utilisateur` WHERE id=$id");
  $tab=$req->fetch();
 }

  //  suppression une affectation 
  if (isset($_GET['idSupcat']) && !empty($_GET['idSupcat'])) {
    $id=$_GET['idSupcat'];
    $supprimer=1;
    $req=$connexion->query("UPDATE `utilisateur` SET supprimer='$supprimer' WHERE id=$id");
    if($req){
       header("Location:users.php");
    }
   
  }
?>  
<main id="main" class="main">
        <section class="section">
        <main class="main-content position-relative border-radius-lg ">
    
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="modal-body p-3">
                        <form class="row g-3 rounded-4 needs-validation shadow p-3" <?php if (isset($_GET['iduser'])) { ?>action="../models/updat/modifuser.php?iduser=<?php echo $_GET['iduser']?>" 
                          
                         <?php }
                            else{  ?> action="../models/add/ajoutuser.php"   <?php
                            }
                            ?> method="POST" novalidate style="background: #FFFFFF;">
                            <div class="row">
                            <?php if (isset($_GET['iduser'])) { ?>
                            <h4 class="card-title text-center">Modifier Utilisateur </h4>
                            <?php }
                            else{  ?>
                              <h4 class="card-title text-center">Ajouter Utilisateur </h4>
                              <?php
                            }
                            ?>
                               <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  id="nom" name="nom" required placeholder="Entrer..." <?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['nom']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Postnom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="postnom" required placeholder="Entrer..." <?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['postnom']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Prenom<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="prenom" required placeholder="Entrer..."<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['prenom']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Genre<span class="text-danger">*</span></label>
                                <select class="form-control" name="genre" id=""<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['genre']; ?> <?php }?>">
                                      <option >M</option>
                                      <option >F</option>
                                </select>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Adresse <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="adresse" required placeholder="Entrer..."<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['adresse']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">E-mail <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" required placeholder="Entrer..."<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['email']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Mot de passe<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="pwd" required placeholder="Entrer..."<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['pwd']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Num Tel <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="telephone" required placeholder="Entrer..."<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['telephone']; ?> <?php }?>">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Boutique<span class="text-danger">*</span></label>
                                <select class="form-control" name="boutique" id=""<?php if (isset($_GET['iduser'])) { ?> value="<?php echo $tab['boutique']; ?> <?php }?>">
                                <?php 
  
                                        $rep=$connexion->query("SELECT * from boutique");
                                        while ($tab=$rep->fetch()) {
                                        
                                      ?>
                                      
                                      <option  value="<?php echo $tab['id']; ?>">

                                          <?php echo $tab['nombout']."  ". $tab['description']; ?>
                                              
                                          </option>
                                      <?php 

                                      }

                                      ?>
                                </select>
                              </div>
                            </div>
                           <p class="text-success text-center">
                                <?php if(isset($mesg)){
                                                    
                                                    ?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                <?php echo $mesg; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <?php
                                                    }  
                                                    
                                                        

                                                    ?>


                            </p>
                            <?php if (isset($_GET['iduser'])) {  ?>
  
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

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listes de Client</h5>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Postnom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Num Tel</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Boutique</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $n=0;
                                $req=$connexion->query("SELECT utilisateur. `nom`, utilisateur.`postnom`, utilisateur.`prenom`, utilisateur.`genre`, utilisateur.`adresse`, utilisateur.`telephone`, utilisateur.`email`, boutique.nombout,boutique.description FROM `utilisateur`,boutique WHERE utilisateur.boutique=boutique.id AND utilisateur.supprimer=0");
                                while($iduser=$req->fetch()){
                                    $n++;
                                ?>
                            <tr>
                                <th scope="row"><?= $n;?></th>
                                <td> <?= $iduser["nom"] ?></td> 
                                <td> <?= $iduser["postnom"] ?></td>
                                <td> <?= $iduser["prenom"] ?></td>
                                <td> <?= $iduser["genre"] ?></td> 
                                <td> <?= $iduser["adresse"] ?></td>
                                <td> <?= $iduser["telephone"] ?></td>
                                <td> <?= $iduser["email"] ?></td> 
                                <td> <?= $iduser['nombout']."  ". $iduser['description'] ?></td>
                              
                                <td><a href='users.php?iduser=<?=$iduser['id'] ?>' class='text-primary'><i class='bi-solid bi bi-pencil-square text-primary'></i></a>
                                <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')" href='users.php?idSupcat=<?=$iduser['id'] ?>' type="button" 
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



        </div>
    </main>

           
        </section>

    </main><!-- End #main -->