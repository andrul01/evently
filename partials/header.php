<!--navbar/header start-->
<?php
session_start();

echo ' 
    <header class="header">
        <a href="./index.php" class="logo">
          <i class="fas fa-e"></i>
          <span>vently</span>
        </a>
        <div class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
        </div>
        ';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $emailName = explode("@", $_SESSION['email'])[0];
    echo '
            <div class="auth-buttons">
              <a href="./profile.php" class="welcome-text">' . htmlspecialchars($emailName) . '</a>
              <a href="./partials/logout.php" class="logout-icon" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
              </a>
            </div>';
} else {
    echo '
            <div class="auth-buttons">
                <a href="#" class="btn login-btn">Login</a>
                <a href="./partials/signup.php" class="btn signup-btn">Sign Up</a>
            </div>';
}
include "./partials/login.php";
include "./partials/signup.php";
echo '
        <div id="menuBars" class="fas fa-bars"></div>
    </header>';

// Signup alert messages
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '
        <div id="signupSuccessAlert" class="custom-alert">
            <div class="alert-box">
                Your account has been created successfully.
            </div>
        </div>
    
        <style>
            .custom-alert {
                position: fixed;
                top: 8rem;
                right: 0rem;
                z-index: 9999;
            }
    
            .alert-box {
                background-color: #f01027;
                color: white;
                padding: 1rem 1.5rem;
                border: 1px solid #c3e6cb;
                // border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                font-size: 1.2rem;
                position: relative;
                min-width: 250px;
            }
        </style>
    
        <script>
            // Auto close after 3 seconds
            setTimeout(function() {
                var alert = document.getElementById("signupSuccessAlert");
                if (alert) {
                    alert.style.display = "none";
                }
            }, 3000);
    
        </script>
        ';
}
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false") {
    echo '
      <div id="signupErrorAlert" class="custom-alert">
          <div class="alert-box" style="background-color: #f01027;">
              Invalid email or password mismatch.
          </div>
      </div>
  
      <style>
          .custom-alert {
              position: fixed;
              top: 8rem;
              right: 0rem;
              z-index: 9999;
          }
  
          .alert-box {
              color: #dc3545 ;
              padding: 1rem 1.5rem;
              border: 1px solid #c3e6cb;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
              font-size: 1.2rem;
              position: relative;
              min-width: 250px;
          }
      </style>
  
      <script>
          setTimeout(function() {
              var alert = document.getElementById("signupErrorAlert");
              if (alert) {
                  alert.style.display = "none";
              }
          }, 3000);
      </script>
      ';
}
// Login alert messages
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true") {
    echo '
      <div id="loginAlert" class="custom-alert">
          <div class="alert-box" style="background-color: #f01027;">
              Login successful.
          </div>
      </div>

      <style>
          .custom-alert {
              position: fixed;
              top: 8rem;
              right: 0rem;
              z-index: 9999;
          }

          .alert-box {
              color: white;
              padding: 1rem 1.5rem;
              border: 1px solid #c3e6cb;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
              font-size: 1.2rem;
              position: relative;
              min-width: 250px;
          }
      </style>

      <script>
          setTimeout(function() {
              var alert = document.getElementById("loginAlert");
              if (alert) {
                  alert.style.display = "none";
              }
          }, 3000);
      </script>
      ';
}
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
    echo "
      <div id=\"loginErrorAlert\" class=\"custom-alert\">
          <div class=\"alert-box error\">
              Invalid credentials, please check.
          </div>
      </div>
  
      <style>
            .custom-alert {
                position: fixed;
                top: 8rem;
                right: 0;
                z-index: 9999;
            }
  
            .alert-box {
                background-color: #f01027;
                color: white;
                padding: 1rem 1.5rem;
                border: 1px solid #c3e6cb;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                font-size: 1.2rem;
                position: relative;
                min-width: 250px;
            }
  
            .alert-box.error {
                background-color: #dc3545;
                border-color: #dc3545;
            }
      </style>
  
      <script>
          setTimeout(function() {
              var alert = document.getElementById(\"loginErrorAlert\");
              if (alert) {
                  alert.style.display = \"none\";
              }
          }, 3000);
      </script>
      ";
}
// Order Booked Alert Message
if (isset($_GET['orderbooked']) && $_GET['orderbooked'] == "success") {
    echo '
        <div id="orderSuccessAlert" class="custom-alert">
            <div class="alert-box" style="background-color: #f01027;">
                Your order has been booked.
            </div>
        </div>
    
        <style>
            .custom-alert {
                position: fixed;
                top: 7rem;
                right: 0;
                z-index: 9999;
            }
    
            .alert-box {
                color: white;
                padding: 1rem 1.5rem;
                border: 1px solid #c3e6cb;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                font-size: 1.2rem;
                position: relative;
                min-width: 250px;
            }
        </style>
    
        <script>
            setTimeout(function() {
                var alert = document.getElementById("orderSuccessAlert");
                if (alert) {
                    alert.style.display = "none";
                }
            }, 3000);
        </script>
        ';
}

?>