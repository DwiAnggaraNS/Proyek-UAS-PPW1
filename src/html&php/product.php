<?php
require "config.php";
require "check.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Page</title>
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
                href="./stockIn.php"
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
                href="./stockOut.php"
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
          <h1 class="h1"><strong>Products Table</strong></h1>
          <p class="fs-4"><strong>The Products table </strong>stores detailed information about all the items available in the inventory. Each entry in this table includes the product name, category, description, price, and stock. This table is crucial for managing the entire product catalog, ensuring that all product information is accurate and up-to-date.
          </p>
        </div>
        <div class="row">
        <div class="card mb-4">
            <div class="card-header" style="background-color:white !important">      
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertData">
                  Insert Data
                </button>
                <a href="exportProduct.php" class="btn btn-success">
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
                                <label for="productName">Product Name</label><br>
                                <input type="text" name="productName" placeholder="Product Name" class="form-control" required>
                                <div class="invalid-feedback">
                                  Please input a valid product name.
                                </div>
                                <div class="valid-feedback">
                                  Input valid.
                                </div><br>
                                
                                <label for="category_id">Product Catogery</label><br>
                                <select name="category_id" class="form-select" required>
                                    <option value="" disabled selected>Choose product's category</option>
                                    <?php
                                        $getCategories = mysqli_query($conn, "SELECT * FROM categories");
                                        while($fetcharray = mysqli_fetch_assoc($getCategories)){
                                            $categoryName = $fetcharray['categoryName'];
                                            $category_id = $fetcharray['category_id'];
                                    ?>
                                    <option value="<?=$category_id;?>"><?=$categoryName;?></option>
                                    <?php
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

                                <label for="productDesc">Product Description</label><br>
                                <textarea name="productDesc" id="productDesc" required name="productDesc" class="form-control" style="resize: none;" rows="4" cols="50" placeholder="In this section, you can write description of your product..."></textarea>
                                <div class="invalid-feedback">
                                  Please input a valid product's note.
                                </div>
                                <div class="valid-feedback">
                                    Input valid.
                                </div>
                                <br>
                                
                                <label for="productPrice">Product Price</label><br>
                                <input type="number" name="productPrice" placeholder="Product Price" id="price" class="form-control" required>
                                <div class="invalid-feedback">
                                  Please select a valid product's price.
                                </div>
                                <div class="valid-feedback">
                                    Input valid.
                                </div><br>

                                <label for="productStock">Product Stock</label><br>
                                <input type="number" name="productStock" placeholder="Product Stock" id="stock" class="form-control" required>
                                <div class="invalid-feedback">
                                  Please select a valid product's stock.
                                </div>
                                <div class="valid-feedback">
                                    Input valid.
                                </div><br>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="addNewProduct">Add</button>
                                </div>
                            </div>
                          </form>
                      </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <?php
                            $user_id = $_SESSION['user_id'];
                            if ($stmt = $conn->prepare("SELECT * FROM products WHERE user_id = ? AND productStock < 1")) {
                                $stmt->bind_param("i", $user_id);
                                $stmt->execute();
                                $getAllProductsStock = $stmt->get_result();
                            
                                while ($fetcharray = $getAllProductsStock->fetch_assoc()) {
                                    $productName = htmlspecialchars($fetcharray['productName'], ENT_QUOTES, 'UTF-8');
                        ?>                                               
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Warning</strong> Product <?=$productName;?> is out of stock!
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $user_id = $_SESSION['user_id'];
                                    $i = 1;
                                    if ($stmt = $conn->prepare("SELECT * FROM products p, categories c WHERE user_id = ? AND p.category_id = c.category_id ORDER BY productName ASC")) {
                                        $stmt->bind_param("i", $user_id);
                                        $stmt->execute();
                                        $getAllProductsStock = $stmt->get_result();

                                        while ($fetcharray = $getAllProductsStock->fetch_assoc()) {
                                            $productName = htmlspecialchars($fetcharray['productName'], ENT_QUOTES, 'UTF-8');
                                            $productCategory = htmlspecialchars($fetcharray['categoryName'], ENT_QUOTES, 'UTF-8');
                                            $productDesc = htmlspecialchars($fetcharray['productDesc'], ENT_QUOTES, 'UTF-8');
                                            $productPrice = (int)$fetcharray['productPrice'];
                                            $productStock = (int)$fetcharray['productStock'];
                                            $product_id = (int)$fetcharray['product_id'];
                                            $category_id = (int)$fetcharray['category_id'];
                                ?>
                                <tr>
                                    <td><?= $i?></td>
                                    <td><?= $productName ?></td>
                                    <td><?= $productCategory ?></td>
                                    <td><?= $productDesc ?></td>
                                    <td><?= $productPrice ?></td>
                                    <td><?= $productStock ?></td>

                                    <td>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$product_id?>">
                                          Edit
                                      </button>
                                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$product_id?>">
                                        Delete
                                      </button>
                                    </div>  
                                  </td>
                                </tr>

                        <!-- modal for editing products -->
                        <div class="modal fade" id="edit<?=$product_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="edit">Edit Product</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post" >
                                        <div class="modal-body">
                                            <label for="productName">Product Name</label><br>
                                            <input type="text" name="productName" value="<?=$productName;?>" class="form-control"><br>
                                            
                                            <label for="category_id">Product Catogery</label><br>
                                            <select name="category_id" class="form-control">
                                                <option value="<?=$category_id;?>"><?=$productCategory;?></option>
                                                <?php
                                                    $getCategories = mysqli_query($conn, "SELECT * FROM categories");
                                                    while($fetcharray = mysqli_fetch_assoc($getCategories)){
                                                        $categoryName = $fetcharray['categoryName'];
                                                        $cat_id = $fetcharray['category_id'];
                                                        if ($cat_id != $category_id) { // Pengecekan jika kategori saat ini tidak sama dengan kategori yang sedang dipilih
                                                            ?>
                                                    <option value="<?=$cat_id;?>"><?=$categoryName;?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                            </select>
                                            <br>
                                        </select>
                                        <br>
                                        <input type="hidden" name="product_id" value="<?=$product_id;?>">
                                        
                                        <label for="productDesc">Product Description</label><br>
                                        <textarea id="productDesc" name="productDesc" class="form-control" value="<?=$productDesc;?>" style="resize: none;" rows="4" cols="50"><?=$productDesc;?></textarea><br>
                                        
                                        <label for="productPrice">Product Price</label><br>
                                        <input type="number" name="productPrice" value="<?=$productPrice;?>" id="price" class="form-control"><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="editProduct">Confirm</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- modal for deleting products -->
                        <div class="modal fade" id="delete<?=$product_id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Delete Product?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="" method="post">
                                        <div class="modal-body">
                                        Do you want to delete this product?
                                        <input type="hidden" name="product_id" value="<?=$product_id;?>">
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary" name="deleteProduct">Yes</button>
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