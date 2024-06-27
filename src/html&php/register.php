<?php
require "config.php";

if (isset($_POST["register"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  // Validasi email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('Location: index.php');
      exit();
  }

  // Password hashing
  $password_hashed = password_hash($password, PASSWORD_DEFAULT);

  // Menggunakan prepared statements untuk menghindari SQL injection
  $sql_check = "SELECT * FROM user WHERE email = ?";
  $stmt_check = mysqli_prepare($conn, $sql_check);
  mysqli_stmt_bind_param($stmt_check, 's', $email);
  mysqli_stmt_execute($stmt_check);
  mysqli_stmt_store_result($stmt_check);
  
  if (mysqli_stmt_num_rows($stmt_check) > 0) {
      // Email sudah digunakan
      echo '<script>
      alert("Email already used");
      window.location.href="register.php";
      </script>';
  } else {
      // Email belum digunakan, lanjutkan dengan pendaftaran
      $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, 'ss', $email, $password_hashed);
      
      if (mysqli_stmt_execute($stmt)) {
          echo '<script>
          alert("Registration successful!");
          window.location.href="index.php";
          </script>';
      } else {
          echo '<script>
          alert("Registration failed. Please try again.");
          window.location.href="register.php";
          </script>';
      }
      
      // Menutup statement
      mysqli_stmt_close($stmt);
  }

  // Menutup statement pengecekan
  mysqli_stmt_close($stmt_check);
}
// Menutup koneksi
mysqli_close($conn);
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link rel="shortcut icon" type="image/png" href="BarangkuLogo.svg" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="landingpage.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="LogoBlue.svg" width="200" alt="">
                </a>
                <form method="POST" class="needs-validation" novalidate>
                  <div class="mb-3">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required placeholder="Enter your email address here">
                      <div class="invalid-feedback">
                        Please input a valid email adress.
                      </div>
                      <div class="valid-feedback">
                        Input valid.
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required placeholder="Enter your password here" here>
                    <div class="invalid-feedback">
                        Please input a valid password.
                      </div>
                      <div class="valid-feedback">
                        Input valid.
                      </div>
                  </div>
                  <button class="btn btn-primary w-100 fs-4 mb-4 rounded-2" name="register">Register</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./login.php">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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