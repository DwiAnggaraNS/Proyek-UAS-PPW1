<?php
// Connect to DB
require "config.php";

// Check cookies and set session if cookies exist
if(isset($_COOKIE['log'])){
    $_SESSION['user_id'] = $_COOKIE["user_id"];
    $_SESSION['user_email'] = $_COOKIE["user_email"];
    $_SESSION['log'] = true;
    header('Location: index.php');
    exit();
}

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]);
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result && $result->num_rows > 0){
        $user = $result->fetch_assoc();
        
        if(password_verify($password, $user['password'])){
            // Set session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['log'] = true;
            var_dump($_SESSION);


            if($remember){
                // Set cookies if 'remember me' is checked
                setcookie("user_id", $user['user_id'], time() + (86400 * 30), "/"); // 30 days expiration
                setcookie("user_email", $user['email'], time() + (86400 * 30), "/");
                setcookie("log", true, time() + (86400 * 30), "/");
            }
            header('Location: index.php');
            exit();
        } else {
            echo '
            <script>
                alert("Password Incorrect");
                window.location.href="login.php";
            </script>
            ';
            exit();
        }
    } else {
        echo '<script>
        alert("Invalid Email/User not found");
        window.location.href="login.php";
        </script>
        ';
        exit();
    }
}

// If user is already logged in, redirect to index
if(isset($_SESSION['log'])){
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
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
                    <label for="inputEmailAddress" class="form-label" >Email Address</label>
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
                    <input type="password" class="form-control" id="inputPassword" name="password" required placeholder="Enter your password here">
                    <div class="invalid-feedback">
                        Please input a valid password.
                      </div>
                      <div class="valid-feedback">
                        Input valid.
                      </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" name="remember" value="true" id="rememberPasswordCheck" checked>
                      <label class="form-check-label text-dark" for="rememberPasswordCheck">
                        Remeber this Device
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-primary w-100 fs-4 mb-4 rounded-2" name="login">Login</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Doesn't have an account yet?</p>
                    <a class="text-primary fw-bold ms-2" href="./register.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
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