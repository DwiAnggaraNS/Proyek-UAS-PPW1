<?php
require "config.php";
require "check.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Export Supplier Data</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
    .user-info{
      Color: #447AB9; 
      font-weight:100px;
      font-size: 18px;
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-between">
            <a href="index.php" class="text-nowrap logo-img ms-0 ms-md-1">
              <img src="LogoBlue.svg" width="180" alt="">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-4 pb-2">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./index.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Data</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./product.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./stockin.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Stock In</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./stockout.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Stock Out</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./suppliers.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-article fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Supppliers</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Export Data</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./exportProduct.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-file-description fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Export Data Products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./exportStockIn.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-file-description fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Export Data Stock In</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./exportStockOut.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-file-description fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Export Data Stock Out</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link primary-hover-bg"
                href="./exportSupplier.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-primary rounded-3">
                  <i class="ti ti-file-description fs-7 text-primary"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Export Data Suppliers</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
              <span class="hide-menu">Auth</span>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link sidebar-link warning-hover-bg"
                href="./logout.php"
                aria-expanded="false"
              >
                <span class="aside-icon p-2 bg-light-warning rounded-3">
                  <i class="ti ti-login fs-7 text-warning"></i>
                </span>
                <span class="hide-menu ms-2 ps-1">Logout</span>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)" style="background-color: white;">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav" style="background-color: white;">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php                        
                      // Periksa apakah user_id ada dalam session
                      if (isset($_SESSION['user_id'])) {
                          $user_id = $_SESSION['user_id'];

                          // Persiapkan statement SQL
                          if ($stmt = $conn->prepare("SELECT email FROM user WHERE user_id = ?")) {
                              // Binding parameter
                              $stmt->bind_param("i", $user_id);

                              // Eksekusi statement
                              if ($stmt->execute()) {
                                  // Ambil hasil dari kueri
                                  $getUserInfo = $stmt->get_result();

                                  // Ambil data pertama (karena hanya satu baris yang diharapkan)
                                  if ($fetcharray = $getUserInfo->fetch_assoc()) {
                                      // Escape output untuk menghindari XSS
                                      $username = htmlspecialchars($fetcharray['email'], ENT_QUOTES, 'UTF-8');
                                      ?>
                                      <!-- Tampilkan username -->
                                      <span class="user-info"><?=$username;?></span>
                                      <?php
                                  } else {
                                      // Handle case where no user with given user_id is found
                                      echo "User tidak ditemukan.";
                                  }
                              } else {
                                  // Handle execution error
                                  echo "Terjadi kesalahan saat mengeksekusi pernyataan SQL.";
                              }

                              // Tutup statement
                              $stmt->close();
                          } else {
                              // Handle preparation error
                              echo "Terjadi kesalahan saat mempersiapkan pernyataan SQL.";
                          }
                      } else {
                          // Handle case where user_id is not set in session
                          echo "User ID tidak ditemukan dalam session.";
                      }
                      ?>

                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
        <h1 class="h1"><strong>Export Suppliers Data</strong></h1>
          <p class="fs-4">
          This page provides you with versatile options to export your inventory data in various formats. Whether you need to generate reports, share information, or keep records, our system offers the flexibility to export your data as PDF, CSV, Excel, or even print it directly. Additionally, you can quickly copy data to your clipboard for easy pasting into other applications. With these features, managing and sharing your inventory data has never been easier or more convenient.          </p> 
        </div>
        <div class="row">
        <div class="table-responsive">

          <div class="data-tables datatable-dark">
              <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>Number</th>
                      <th>Supplier Name</th>
                      <th>Supplier Contacts</th>
                      <th>Supplier Location</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                          $user_id = $_SESSION['user_id'];
                          $i = 1;
                          if ($stmt = $conn->prepare("SELECT * FROM suppliers WHERE user_id = ? ORDER BY supplierName ASC")) {
                              $stmt->bind_param("i", $user_id);
                              $stmt->execute();
                              $getAllSuppliers = $stmt->get_result();
                              while ($fetcharray = $getAllSuppliers->fetch_assoc()) {
                                  $supplier_id = (int)$fetcharray['supplier_id'];
                                  $supplierName = htmlspecialchars($fetcharray['supplierName'], ENT_QUOTES, 'UTF-8');
                                  $supplierContact = htmlspecialchars($fetcharray['supplierContact'], ENT_QUOTES, 'UTF-8');
                                  $supplierLocation = htmlspecialchars($fetcharray['supplierLocation'], ENT_QUOTES, 'UTF-8');
                      ?>
                      <tr>
                          <td><?= $i?></td>
                          <td><?= $supplierName ?></td>
                          <td><?= $supplierContact ?></td>
                          <td><?= $supplierLocation ?></td>
                    </tr>
                          <?php
                            $i++;
                      }
                      $stmt->close();
                  }
                  ?>
              </tbody>
          </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script>

$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

</body>

</html>