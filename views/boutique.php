<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
?>



  <!-- CSS Files -->
>
</head>

<main id="main" class="main">
        <section class="section">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <main class="main-content position-relative border-radius-lg ">
 
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">AJouter une Boutique </h4>
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
                                            <label for="floatingInput">Nom</label>
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="description">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control rounded-4" id="floatingInput"
                                                        required name="description">
                                            <label for="floatingInput">Adresse</label>
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

                              
                                    <tr>
                                      
                                    </tr>

                               
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