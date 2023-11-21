<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
?>
<main id="main" class="main">
        <section class="section">
        <main class="main-content position-relative border-radius-lg ">
    
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="modal-body p-3">
                        <form class="row g-3 rounded-4 needs-validation shadow p-3" method="POST" novalidate style="background: #FFFFFF;">
                            <div class="row">
                            <h4 class="card-title text-center">Stock </h4>
                              
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Description <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required placeholder="Entrer...">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Quantite<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required placeholder="Entrer...">
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Prix Unitaire<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required placeholder="Entrer...">
                              </div>
                              
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Produits<span class="text-danger">*</span></label>
                                <select class="form-control" name="categorie" id="">
                                        
                                </select>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Fournisseur<span class="text-danger">*</span></label>
                                <select class="form-control" name="categorie" id="">
                                        
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

                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                name="valider"> Enregister</button> <br>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listes de Stock</h5>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">Dates</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Quantite</th>
                                        <th scope="col">Prix Unitaire</th>
                                        <th scope="col">Produit</th>
                                        <th scope="col">Fournisseur</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        
                                    </tr>

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