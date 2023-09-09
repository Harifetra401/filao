<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Logiciel de Gestion</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">

            <center>
              <img src="../assets/img/logo.jpg" alt class="w-px-150 h-auto rounded-circle" />
            </center>

          </a>


        </div>


        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="../html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>


          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Opération</span>
          </li>
          <li class="menu-item">
            <a href="choixFournisseur.php" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Nouvelle Achat</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="listeFact.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Suivi Traitement</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Gestion de Stock</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Gestion de Chargement</div>
            </a>

          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li>
                <a class="dropdown-item" href="auth-login-basic.html">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Se déconnecter</span>
                </a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Changer le Mot de passe</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>

                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light"> </span> Preparation a la chargement
            </h4>

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 col-12 mb-md-0 mb-4">
                    <div class="card">
                      <h5 class="card-header">Les poissons sortie</h5>
                      <div class="card-body">
                        <form id="formAuthentication" class="mb-3" action="add.php" method="POST">
                            <input type="hidden" name="id_sortie" value="<?=$_GET["id"]?>">
                          <input type="radio" name="place" id="eto" value="1" required>
                          <label for="eto">sortie depuis ici</label>
                          <input type="radio" name="place" id="any" value="2" required>
                          <label for="any">sortie depuis l'autre</label>
                          <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password">Selection Poisson</label>

                            </div>


                            <div class="d-flex mb-3">

                              <div class="flex-grow-1 row">
                                  <div class="input-group input-group-merge">
                                    <select id="defaultSelect" name="poisson" class="form-select">
                                      <?php require('../poisson/liste.php')?>
                                    </select>
                                </div>
                                
                                <!-- </div> -->
                              </div>
                            </div>
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password">Nombre de sac</label>

                            </div>
                            <div class="input-group input-group-merge">
                              <input type="number" class="form-control" name="sac" placeholder="" aria-describedby="" require/>
                            </div>
                            <div class="d-flex justify-content-between">

                              <label class="form-label" for="password">Poid en Kg</label>

                            </div>
                            <div class="input-group input-group-merge">
                              <input type="number" id="" class="form-control" name="qtt" placeholder="" require/>
                            </div>
                          </div>
                          <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Ajouter</button>
                          </div>
                        </form>
                        

                        <!-- /Connections -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 col-12">
                    <div class="card">
                      <div class="row">
                        <!-- Bootstrap carousel -->
                        <div class="col-md">
                          <h5 class="my-4">Bon de livraison numero <?=$_GET["id"]?> du chargemnt aujourd'hui</h5>


                        </div>
                      </div>
                      <div class="card-body">
                        <p></p>
                        <!-- Social Accounts -->
                        <div class="card">
                          <div class="table-responsive text-nowrap">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Poisson</th>
                                  <th>Poid</th>
                                  <th>Nombre de sac</th>

                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <?php require('liste.php')?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /Social Accounts -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->

          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>