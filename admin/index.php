<!-- session check -->
<?php
session_start();
if (isset($_SESSION["username"])) {
  header("Location: ./dashboard.php");
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Evently - Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="./images/favicon.svg" type="image/svg+xml">
</head>
<body class="bg-light">

  <!-- Login Form -->
  <div class="container d-flex justify-content-center align-items-center rounded-0" style="min-height: 100vh;">
    <div class="bg-white shadow p-5 rounded-0 w-100" style="max-width: 400px;">
      <h2 class="mb-4 text-center text-danger">Admin Login</h2>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="text" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
          <a href="#" class="small text-decoration-none text-danger">Forgot password?</a>
        </div>
        <button type="submit" name="login" class="btn btn-danger w-100">Login</button>
      </form>

      <!-- login code -->
      <?php include './includes/login.php' ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
