<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
include('../models/add/ajoutcat.php');
include('../models/updat/modifcat.php');
?>
  <!-- CSS Files -->

</head>

<main id="main" class="main">
        
  <main class="main-content position-relative border-radius-lg ">
 
    <div class="container-fluid py-4">
        <div class="row">
        <?php 
            if(isset($_GET['edit_category'])) 
            {
              $idp=$_GET['edit_category'];
              $req=$connexion->query("SELECT * FROM categorie WHERE id='$idp' ");
              if ($tab=$req->fetch()) {
                ?>
                <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Modifier une Catégorie </h4>
                        <div class="modal modal-signin position-static d-block  py-1" tabindex="-1" role="dialog"
                                id="modalSignin">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header border-bottom-0">
                                        
                                    </div>
                                <div class="modal-body p-5 pt-0">
                                    <form class="row g-3 needs-validation" method="POST" novalidate>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="description" value="<?=$tab['description']; ?>">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <p class="text-success text-center">
                                            

                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="bi bi-check-circle me-1"></i>
                                                                                                   
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                         
                                            </p>

                                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                    name="valider"> Enregister</button> <br>
                                    </form>
                                </div>
                            </div>
                            <!-- <?php
          
                                //}
                                ?> -->
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
                        <h4 class="card-title text-center">AJouter une Catégorie </h4>
                        <div class="modal modal-signin position-static d-block  py-1" tabindex="-1" role="dialog"
                                id="modalSignin">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content rounded-5 shadow">
                                    <div class="modal-header border-bottom-0">
                                        
                                    </div>
                                <div class="modal-body p-5 pt-0">
                                    <form class="row g-3 needs-validation" method="POST" novalidate>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <p class="text-success text-center">
                                            

                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="bi bi-check-circle me-1"></i>
                                                                                                   
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>

                                         
                                            </p>

                                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                                    name="valider"> Enregister</button> <br>
                                    </form>
                                </div>
                            </div>
                            <!-- <?php
          
                                //}
                                ?> -->
                        </div>
                    </div>

                </div>
            </div>
            <?php
                 }
                ?>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Listes des Catégorie</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $n=0;
                                $req=$connexion->query("SELECT * from categorie");
                                while($cat=$req->fetch()){
                                    $n++;
                                ?>
                            <tr>
                                <th scope="row"><?= $n;?></th>
                                <td> <?= $cat["description"] ?></td> 
                                <td><a href='categorie.php?edit_category=<?=$cat['id'] ?>' class='text-primary'><i class='bi-solid bi bi-pencil-square text-primary'></i></a>
                                <a href='categorie.php?delete_category=<?=$cat['id'] ?>' type="button" 
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