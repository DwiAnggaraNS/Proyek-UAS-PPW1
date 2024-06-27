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
  <title>Stock Out Page</title>
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
        <h1 class="h1"><strong>Stock Out Table</strong></h1>
          <p class="fs-4"><strong>The Stock Out table</strong> tracks all outgoing inventory items. Each record includes information such as the date of dispatch, the quantity of items shipped, the specific products, and the purpose of the shipment. This table is essential for monitoring inventory reductions, helping to manage stock levels effectively and ensuring that all product outflows are documented properly.
          </p>      
        </div>
        <div class="row">
        <div class="card mb-4">
            <div class="card-header" style="background-color:white !important">      
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertData">
                  Insert Data
                </button>
                <a href="exportStockOut.php" class="btn btn-success">
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
                              <label for="category_id">Product's Category</label><br>
                                <select name="category_id" id="category_id" class="form-select" required>
                                <option value="" disabled selected>Choose product's category...</option>
                                  <?php
                                        if ($stmt = $conn->prepare("SELECT * FROM categories")) {
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            
                                            while ($fetcharray = $result->fetch_assoc()) {
                                                $categoryName = htmlspecialchars($fetcharray['categoryName'], ENT_QUOTES, 'UTF-8');
                                                $category_id = (int)$fetcharray['category_id'];
                                                ?>
                                    <option value="<?=$category_id;?>"><?=$categoryName;?></option>
                                    <?php
                                        }
                                        $stmt->close();
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid product's category.
                                </div>
                                <div class="valid-feedback">
                                    Input valid.
                                </div>
                              <br>
                                
                              <label for="product_id">Product</label><br>
                              <select name="product_id" id="product_id" class="form-select" required>
                                  <option value="" disabled selected>Choose Product...</option>
                              </select>
                              <div class="invalid-feedback">
                                  Please select a valid product.
                              </div>
                              <div class="valid-feedback">
                                  Input valid.
                              </div><br>

                              <label for="quantity">Quantity</label><br>
                              <input type="number" name="quantity" placeholder="Insert product's quantity" class="form-control" required>
                              <div class="invalid-feedback">
                                  Please input a valid quantity.
                              </div>
                              <div class="valid-feedback">
                                  Input valid.
                              </div>
                              <br> 

                              <label for="note">Note</label><br>
                              <textarea name="note" id="note" class="form-control" required style="resize: none;" rows="4" cols="50" placeholder="In this section, you can write note of your action..."></textarea>
                              <div class="invalid-feedback">
                                  Please input a valid note.
                              </div>
                              <div class="valid-feedback">
                                  Input valid.
                              </div>
                              <br>

                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="addNewStockOut">Add</button>
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
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Date Issued</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $user_id = $_SESSION['user_id'];
                                    $i = 1;
                                    if ($stmt = $conn->prepare("SELECT * FROM stockOutView WHERE user_id = ? ORDER BY dateIssued DESC")) {
                                        $stmt->bind_param("i", $user_id);
                                        $stmt->execute();
                                        $getAllProductsStock = $stmt->get_result();

                                        while ($fetcharray = $getAllProductsStock->fetch_assoc()) {
                                            $stockOutId = (int)$fetcharray['stockOutId'];
                                            $product_id = (int)$fetcharray['product_id'];
                                            $productName = htmlspecialchars($fetcharray['productName'], ENT_QUOTES, 'UTF-8');
                                            $quantity = (int)$fetcharray['quantity'];
                                            $dateIssued = $fetcharray['dateIssued'];
                                            $note = htmlspecialchars($fetcharray['note'], ENT_QUOTES, 'UTF-8');
                                ?>
                                <tr>
                                    <td><?= $i?></td>
                                    <td><?= $productName ?></td>
                                    <td><?= $quantity ?></td>
                                    <td><?= $dateIssued ?></td>
                                    <td><?= $note ?></td>

                                    <td>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$stockOutId?>">
                                          Edit
                                      </button>
                                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$stockOutId?>">
                                        Delete
                                      </button>
                                    </div>
                                    </td>
                                </tr>

                        <!-- modal for editing products -->
                        <div class="modal fade" id="edit<?=$stockOutId?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="edit">Edit Stock Out Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="stockOutId" value="<?=$stockOutId;?>">
                                        <input type="hidden" name="product_id" value="<?=$product_id;?>">
                                        
                                        <label for="note">Note</label><br>
                                        <textarea id="note" name="note" class="form-control" value="<?=$note;?>" style="resize: none;" rows="4" cols="50"><?=$note;?></textarea><br>
                                        
                                        <label for="quantity">Quantity</label><br>
                                        <input type="number" name="quantity" value="<?=$quantity;?>" id="quantity" class="form-control"><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="editStockOut">Confirm</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- modal for deleting products -->
                        <div class="modal fade" id="delete<?=$stockOutId?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Delete Stock Out Data?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="post">
                                        <div class="modal-body">
                                        Do you want to delete this stock out data?
                                        <input type="hidden" name="stockOutId" value="<?=$stockOutId;?>">
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="deleteStockOut">Yes</button>
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

</html>

<!-- JS for dropdown dependent list -->
<script>
    $(document).ready(function() {
        $('#category_id').change(function() {
            var category_id = $(this).val();
            if (category_id != "") {
                $.ajax({
                    url: 'getProducts.php',
                    method: 'POST',
                    data: {category_id: category_id},
                    success: function(response) {
                        $('#product_id').html(response);
                    }
                });
            } else {
                $('#product_id').html('<option value="">---SELECT CATEGORY FIRST---</option>');
            }
        });
    });

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