<?php
require "config.php";
require "check.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Page</title>
  <link rel="shortcut icon" type="image/png" href="BarangkuLogo.svg" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
    html, body {
        overflow-x: hidden;
    }
    .user-info{
      Color: #447AB9; 
      font-weight:100px;
      font-size: 18px;
    }
    .typing-container {
    display: inline-block; /* Menyusunnya dalam satu baris dengan "Hello" */
    width: fit-content; /* Adjust the container size to fit the text */
    white-space: nowrap; /* Prevent line break */
    overflow: hidden; /* Hide the text that overflows */
    font-size: 30px; /* Font size */
    /* border-right: 0.15em solid #000; Cursor effect */
    padding-right: 0.15em; /* Space for cursor */
    vertical-align: top; /* Menyusun vertikal dengan "Hello" */

    }

    #typing-text {
        color: #0085db;
        display: inline-block;
        white-space: nowrap; /* Prevent line break */
        overflow: hidden; /* Hide the text that overflows */
        animation: typing 8s steps(12, end) infinite, blink 0.75s step-end infinite;
        border-right: 0.15em solid #000; 
    }

    @keyframes typing {
        0% { width: 0; }
        50% { width: 100%; }
        100% { width: 0; }
    }

    @keyframes blink {
        from, to { border-color: transparent; }
        50% { border-color: black; }
    }

    /* Freeze animation after completion for 2 seconds */
    .typing-text::after {
        content: "   "; /* Create a pseudo-element */
        display: inline-block;
        width: 1em; /* Width of the pseudo-element */
        animation: freeze 5s steps(1) infinite;
    }

    @keyframes freeze {
        from, to {
            width: 1em; /* Keep width constant */
        }
    }

    /* Media query for handphones (max-width: 767px) */
    @media (max-width: 767px) {
      .typing-container {
          text-align: center;
          width: 100%;
          padding-right: 0.10em; /* Space for cursor */
          display:block;
        }
        
        #typing-text{
          font-size:25px !important;
          display: block;
          animation:none;
          border-right: none; 
        }
        #hello-text{
          font-size:25px !important;
        }
      
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
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end" >
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false" >
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
                                  // echo "User tidak ditemukan.";
                              }
                          } else {
                              // Handle execution error
                              // echo "Terjadi kesalahan saat mengeksekusi pernyataan SQL.";
                          }

                          // Tutup statement
                          $stmt->close();
                      } else {
                          // Handle preparation error
                          // echo "Terjadi kesalahan saat mempersiapkan pernyataan SQL.";
                      }
                  } else {
                      // Handle case where user_id is not set in session
                      // echo "User ID tidak ditemukan dalam session.";
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

                  <div style="display:block;"></div>
                  <div class="container">
                      <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                          <div class="my-5 text-center text-xl-start">
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
                                              <div class="typing-container">
                                                <h1 class="display-10 fw-bolder text-white mb-2" id="hello-text" style="font-size:40px; color:black!important; display: inline-block;
                                                    overflow: hidden;">
                                                    <strong>Hello </strong>
                                                </h1>
                                                    <h1 class="display-10 fw-bolder text-white mb-2" id="typing-text" style="color: #0085db !important; font-size:40px;">
                                                      <strong><?= $username; ?>!</strong>    
                                                    </h1> 
                                                </div>
                                              <?php
                                          } else {
                                            // Handle case where no user with given user_id is found
                                            // echo "User tidak ditemukan.";
                                          }
                                        } else {
                                          // Handle execution error
                                          // echo "Terjadi kesalahan saat mengeksekusi pernyataan SQL.";
                                      }
                                      // Tutup statement
                                      $stmt->close();
                                  } else {
                                      // Handle preparation error
                                      // echo "Terjadi kesalahan saat mempersiapkan pernyataan SQL.";
                                  }
                              } else {
                                  // Handle case where user_id is not set in session
                                  // echo "User ID tidak ditemukan dalam session.";
                              }
                              ?>
                              <p class="lead fw-normal text-white-50 mb-4" style="color: #3E4756!important;">Welcome to our comprehensive inventory management system, designed to streamline and optimize your business operations. Our platform offers an intuitive interface and powerful features to help you manage products, suppliers, and inventory movements efficiently. Whether you're tracking incoming stock, managing supplier details, or monitoring product distribution, our system provides the tools you need for effective inventory control. Join us in transforming the way you handle inventory with ease and precision.</p>
                              </div>
                            </div>
                            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                              <img class="img-fluid rounded-3 my-5" src="welcome.jpg" alt="..." /></div>
                            </div>
                          </div>
                  </div>
                  <hr><br>
                  <div class="row">
                    <h1 class="h1"style="font-size:30px"><strong>Explanation of Each Table</strong></h1>
                    <div class="divider" style="margin-bottom:20px"></div>
                  <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" style="font-size:18px">
                          <strong>Explanation of Products Table</strong>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body" style="font-size:16px">
                          <strong>The Products table </strong>stores detailed information about all the items available in the inventory. Each entry in this table includes the product name, category, description, price, and stock. This table is crucial for managing the entire product catalog, ensuring that all product information is accurate and up-to-date.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="font-size:18px" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          <strong>Explanation of Stock In Table</strong>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body" style="font-size:16px">
                          <strong>The Stock In table</strong>  records all incoming inventory items. Each entry in this table includes details such as the date of receipt, the quantity of items received, the specific products, and the supplying vendor. This table is vital for tracking inventory additions, ensuring that all incoming stock is logged accurately and inventory levels are kept up-to-date.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="font-size:18px" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          <strong>Explanation of Stock Out Table</strong>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body" style="font-size:16px">
                        <strong>The Stock Out table</strong> tracks all outgoing inventory items. Each record includes information such as the date of dispatch, the quantity of items shipped, the specific products, and the purpose of the shipment. This table is essential for monitoring inventory reductions, helping to manage stock levels effectively and ensuring that all product outflows are documented properly.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="font-size:18px" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          <strong>Explanation of Supplier Table</strong>
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body" style="font-size:16px">
                        <strong>The Suppliers table </strong>contains essential information about the vendors and suppliers associated with the store. This includes supplier names, contact details, addresses, and other relevant information. This table helps in maintaining a comprehensive database of all suppliers, making it easy to manage supplier relationships and streamline procurement processes.
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          <br><hr><br>
          <div class="row">
            <h1 class="h1"><strong>Tutorial</strong></h1>
            <p class="fs-6">Follow these steps to effectively use our inventory management system:</p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fs-6"><strong>1. Upload Product Information</strong></h5>
                  <p class="card-text fs-4">On the Products Page, click the "Insert Data" button to upload information for all your products. This includes details such as product names, categories, descriptions, prices, and images. Ensuring all product information is accurately uploaded will help in efficient inventory tracking and management.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a href="product.php" class="btn btn-primary">Upload your products</a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fs-6"><strong>2. Upload Supplier Information</strong></h5>
                  <p class="card-text fs-4">Navigate to the Suppliers Page and click the "Insert Data" button to upload information about all the suppliers who provide products to your store. Include essential details such as supplier names, contact information, and addresses. Maintaining a comprehensive supplier database is crucial for smooth procurement processes.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a href="suppliers.php" class="btn btn-primary">Upload your suppliers</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fs-6"><strong>3. Track Stock In and Stock Out</strong></h5>
                  <p class="card-text fs-4">Use the Stock In and Stock Out pages to monitor daily inventory movements. On the Stock In page, select products from a list of those uploaded on the Products Page and choose suppliers from the list uploaded on the Suppliers Page. Record incoming stock details such as receipt date and quantity. On the Stock Out page, select products from the list to log outgoing stock, noting the date, quantity, and destination. Accurate tracking of stock movements helps in maintaining optimal inventory levels.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                  <a href="stockIn.php" class="btn btn-primary">Track your stock in</a>
                  <a href="stockOut.php" class="btn btn-primary">Track your stock out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-titlefs-6"><strong>4. Export Data</strong></h5>
                  <p class="card-text fs-4">Once you have collected data, you can export it in your preferred format. On the Export Data page, choose to export data as PDF, CSV, Excel, print it directly, or copy it to the clipboard. You can also click the "Export" button on any data page to perform the export. This feature ensures you can easily share, analyze, and maintain records of your inventory data efficiently and effectively. By following these steps, you'll be able to efficiently manage your inventory, keep accurate records, and streamline your business operations. </p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a href="exportProduct.php" class="btn btn-primary">Export your product data</a>
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