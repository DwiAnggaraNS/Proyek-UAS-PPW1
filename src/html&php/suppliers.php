<?php
require "config.php";
require "check.php";
$user_id = $_SESSION['user_id'];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier Page</title>
  <link rel="shortcut icon" type="image/png" href="BarangkuLogo.svg" />
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
        <h1 class="h1"><strong>Suppliers Table</strong></h1>
          <p class="fs-4"><strong>The Suppliers table </strong>contains essential information about the vendors and suppliers associated with the store. This includes supplier names, contact details, addresses, and other relevant information. This table helps in maintaining a comprehensive database of all suppliers, making it easy to manage supplier relationships and streamline procurement processes.
          </p>     
        </div>
        <div class="row">
        <div class="card mb-4">
            <div class="card-header" style="background-color:white !important">      
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertData">
                  Insert Data
                </button>
                <a href="exportSupplier.php" class="btn btn-success">
                  Export Data
                </a>
            

                <!-- Modal -->
                <div class="modal fade" id="insertData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Insert Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post" class="needs-validation" novalidate>
                            <div class="modal-body">
                                <label for="supplierName">Supplier Name</label><br>
                                <input type="text" name="supplierName" placeholder="Supplier Name" class="form-control" required>
                                <div class="invalid-feedback">
                                  Please input a valid supplier name.
                                </div>
                                <div class="valid-feedback">
                                  Input valid.
                                </div>
                                <br>
                                
                                <label for="supplierContact">Supplier Contacts</label><br>
                                <textarea name="supplierContact" id="supplierContact" class="form-control" required style="resize: none;" rows="4" cols="50" placeholder="In this section, you can write supplier's telephone number and their social media"></textarea>
                                <div class="invalid-feedback">
                                  Please input a valid supplier's contact.
                                </div>
                                <div class="valid-feedback">
                                  Input valid.
                                </div>
                                <br>
                                
                                <label for="supplierLocation">Supplier Location</label><br>
                                <input type="text" name="supplierLocation" placeholder="Supplier Location" id="supplierLocation" class="form-control" required>
                                <div class="invalid-feedback">
                                  Please input a valid supplier's location.
                                </div>
                                <div class="valid-feedback">
                                  Input valid.
                                </div>
                                <br>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="addNewSupplier">Add</button>
                                </div>
                          </form>
                        </div>
                      </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Supplier Name</th>
                                    <th>Supplier Contacts</th>
                                    <th>Supplier Location</th>
                                    <th>Action</th>
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

                                    <td>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$supplier_id?>">
                                          Edit
                                      </button>
                                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$supplier_id?>">
                                        Delete
                                      </button>
                                    </div>
                                    </td>
                                </tr>

                        <!-- modal for editing products -->
                        <div class="modal fade" id="edit<?=$supplier_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="edit">Edit Supplier Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post">
                                    <div class="modal-body">
                                        <label for="supplierName">Supplier Name</label><br>
                                        <input type="text" name="supplierName" value="<?=$supplierName;?>" id="supplierName" class="form-control"><br>

                                        <input type="hidden" name="supplier_id" value="<?=$supplier_id;?>">
                                        
                                        <label for="supplierContact">Supplier Contact</label><br>
                                        <textarea id="supplierContact" name="supplierContact" class="form-control" value="<?=$supplierContact;?>" style="resize: none;" rows="4" cols="50"><?=$supplierContact;?></textarea><br>
                                        
                                        <label for="supplierLocation">Supplier Contact</label><br>
                                        <textarea id="supplierLocation" name="supplierLocation" class="form-control" value="<?=$supplierLocation;?>" style="resize: none;" rows="4" cols="50"><?=$supplierLocation;?></textarea><br>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="editSupplier">Confirm</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- modal for deleting products -->
                        <div class="modal fade" id="delete<?=$supplier_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Delete Supplier?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="post">
                                        <div class="modal-body">
                                        Do you want to delete this supplier?
                                        <input type="hidden" name="supplier_id" value="<?=$supplier_id;?>">
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="deleteSupplier">Yes</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
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
</body>
<script>
      //Handling invalid form submission
      (() => {
        'use strict';
    
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');
    
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</html>