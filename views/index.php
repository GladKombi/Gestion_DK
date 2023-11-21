<?php 
include '../connexion/connexion.php';//Se connecter à la BD
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DK_Projet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
    

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="../stylesheet" href="css/style.css">
    <link rel="../stylesheet" href="style.css">
    


</head>

<body >

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="ad.php" class="logo d-flex align-items-center">
               
                <span class="d-none d-lg-block ">DK_Projet</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

       

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar contenu">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="boutique.php">
                    <i class="bi bi-house-door"></i>
                    <span> Liste Boutique</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="categorie.php">
              
                    <i class="bi bi-book"></i>
                    <span> Liste  Catégories</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="client.php">
                    <i class="bi bi-person-circle"></i>
                    <span> Liste  Clients</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed"  href="fournisseur.php">
        
                    <i class="bi bi-chevron-double-right"></i>
                    <span> Liste  Fournisseurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed"href="commande.php">
                    <i class="bi bi-list-check"></i>
                    <span> Liste  Commandes</span>
                </a>
            </li><!-- End Login Page Nav -->

          
         
            <li class="nav-item">
                <a class="nav-link collapsed" href="produit.php">
                    <i class="bi bi-book"></i>
                    <span> Liste Produits</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="approvisionnemet.php">
              
                    <i class="bi bi-house-door"></i>
                    <span> Liste Approvisionnemet</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="stock.php">
                    <i class="bi bi-person-circle"></i>
                    <span> Liste  Stock</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed"  href="users.php">
        
                    <i class="bi bi-chevron-double-right"></i>
                    <span> Liste  Utilisateurs</span>
                </a>
            </li>

            <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Mouvements</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="dettes.php">
              <i class="bi bi-circle"></i><span>Dettes</span>
            </a>
          </li>
          <a href="dettepaie.php">
              <i class="bi bi-circle"></i><span>Paiement_Dettes</span>
            </a>
          </li>
          <li>
            <a href="paiement.php">
              <i class="bi bi-circle"></i><span>Paiements</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    

    <!-- ======= Footer ======= -->
    
   <!-- End Footer -->

    <a href="#" class="back-to-top d-flex couleur align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
           
   <script src="assetss/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="../assets/js/main.js"></script>

</body>

</html>