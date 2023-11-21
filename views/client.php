<?php 
include '../connexion/connexion.php';//Se connecter à la BD
include 'index.php';
$mesg=$_SESSION['msg'];
$_SESSION['msg']="";
$msg=$_SESSION['msge'];
$_SESSION['msge']="";
if(isset($_GET['idclient']))
{
    $id=$_GET['idclient'];
    $req=$connexion->query("SELECT * FROM client where id='$id' ");
    $element=$req->fetch();


}


?>
<main id="main" class="main">
        <section class="section">
        <main class="main-content position-relative border-radius-lg ">
    
        <div class="container-fluid py-4">
            <div class="row">
            
                <div class="col-lg-12">
                    <div class="modal-body p-3">
                        <form class="row g-3 rounded-4 needs-validation shadow p-3"   <?php if(isset($_GET['idclient'])){?> action="../models/updat/up_client_post.php?id=<?=$_GET['idclient']?>"<?php }else{?>  action="../models/add/client_post.php"<?php } ?> method="POST" novalidate style="background: #FFFFFF;">
                            <div class="row">
                            <?php if(isset($_GET['idclient'])){?><h4 class="card-title text-center">Modifier un Client </h4><?php }else {?>  <h4 class="card-title text-center">Ajouter un Client </h4><?php  } ?>
                             
                          
                          
                               <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nom" required placeholder="Entrer nom" <?php if(isset($_GET['idclient'])){?>value="<?=$element['nom']?>" <?php } ?> >
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Postnom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  required placeholder="Entrer postnom" name="postnom" <?php if(isset($_GET['idclient'])){?>value="<?=$element['postnom']?>" <?php } ?>>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Prenom<span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  required placeholder="Entrer prenom" name="prenom" <?php if(isset($_GET['idclient'])){?>value="<?=$element['prenom']?>" <?php } ?>>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                            
                                            
                                            
                                       
                                       

                                <label for="">Genre<span class="text-danger">*</span></label>
                                <select <?php if(isset($_GET['idclient'])){?>value="<?=$element['genre']?>" <?php } ?> class="form-control rounded-4" required name="genre">

                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                </select>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Adresse <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required placeholder="Entrer adresse" name="adresse" <?php if(isset($_GET['idclient'])){?>value="<?=$element['adresse']?>" <?php } ?>>
                              </div>
                              <div class="col-xl-6 clo-lg-6 col-md-6 mt-4 col-sm-6">
                                <label for="">Num Tel <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required placeholder="Entrer Num Tel" name="tel" <?php if(isset($_GET['idclient'])){?>value="<?=$element['telephone']?>" <?php } ?>>
                              </div>
                            </div>
                           <p class="text-success text-center">
                                <?php if(!empty($mesg)){
                                                    
                                                    ?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                <?php echo $mesg; $_SESSION['msg']=""; ?>

                                
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <?php } ?>
                            <?php if(!empty($msg)){
                                                    
                                                    ?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                <?php echo $msg; ?>

                                
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <?php } ?>

                            </p>

                           <?php if(isset($_GET['idclient'])){?> <button class="w-50    mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                name="valider"> Modifier</button>
                                <a href="client.php" class="w-50 mb-2   btn btn-lg rounded-5 btn-primary">vider</a>
                                 <?php } else { ?>
                            <button class="w-100 mb-2 btn btn-lg rounded-5 btn-outline-primary" type="submit"
                                name="valider"> Enregistrer</button> <br><?php } ?>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Postnom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Tel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $req=$connexion->query("SELECT * FROM client where supprimer=0");
                                $numero=0;
                                while($client=$req->fetch())
                                {
                                    $numero++;

                               
                                
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $numero?></th>
                                        <td><?php echo $client['nom']?></td>
                                        <td><?php echo $client['postnom']?></td>
                                        <td><?php echo $client['prenom']?></td>
                                        <td><?php echo $client['genre']?></td>
                                        <td><?php echo $client['adresse']?></td>
                                        <td><?php echo $client['telephone']?></td>
                                        <td><a href="client.php?idclient=<?php echo $client['id']?>" class=" btn btn-primary"><i class="bi-solid  bi bi-pencil"></i></a><a href="../models/delete/del_client_post.php?idclient=<?php echo $client['id']?>" class="btn btn-danger"><i class="bi-solid  bi bi-trash"></i></a></td>
                                        

                                    </tr>
                         <?php  } ?>

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