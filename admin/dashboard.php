<!-- session check -->
<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ./index.php");
}
?>

<!doctype html>
<html lang="en">
  

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atex - Admin panel</title>
  <link rel="icon" href="./images/favicon.svg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="./images/favicon.svg" width="25" alt="">
        <span class="ms-2">Evently</span>
      </a>
      <a href="./includes/logout.php" class="btn btn-danger border rounded-0 p-2" title="Logout">
        Logout
      </a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <nav class="col-lg-2 d-none d-lg-block bg-dark text-white p-3 vh-100">
        <ul class="nav flex-column">
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#">
              <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#categories">
              <i class="fas fa-images me-2"></i>Gallery
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#venue">
              <i class="fas fa-map-marker-alt me-2"></i>Venue
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#users">
              <i class="fas fa-users me-2"></i>Users
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#orders">
              <i class="fas fa-clipboard-list me-2"></i>Orders
            </a>
          </li>
          <li class="nav-item mb-3">
            <a class="nav-link text-white bg-danger rounded py-3 px-3" href="#feedback">
              <i class="fas fa-comments me-2"></i>Feedbacks
            </a>
          </li>
        </ul>
      </nav>



      <!-- Main Content -->
      <main class="col-lg-10 p-4 bg-light">
        <h3 class="mb-4">Welcome <span class="text-danger"><?php echo $_SESSION['username']; ?></span></h3>

        <!-- Add Gallery -->
        <div class="card shadow-sm rounded-0 mb-4 py-3 " id="categories">
          <div class="card-body">
            <h5 class="card-title">Add Gallary</h5>
            <form action="./dashboard.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" required class="form-control">
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Upload Image File</label>
                <input type="file" id="image" name="image" required class="form-control">
              </div>
              <button type="submit" class="btn btn-danger rounded-0">+ Add Gallery</button>
            </form>
            <!-- Add Gallery Code -->
            <?php include './includes/add-venue.php'; ?>
          </div>
        </div>

        <!-- Gallery table -->
        <div class="card mb-4 shadow-sm rounded-0">
          <div class="card-body">
            <h5 class="card-title">Gallery</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-primary ">
                  <tr>
                    <th>GID</th>
                    <th>Name of Event</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="load_table">
                  <?php include './includes/get-gallery.php'; ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Add Venue -->
        <div class="card shadow-sm rounded-0 mb-4 py-3 " id="categories">
          <div class="card-body">
            <h5 class="card-title">Venue</h5>
            <form action="./dashboard.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="vname" class="form-label">Name</label>
                <input type="text" id="vname" name="vname" required class="form-control">
              </div>
              <div class="mb-3">
                <label for="vimage" class="form-label">Upload Image File</label>
                <input type="file" id="vimage" name="vimage" required class="form-control">
              </div>
              <div class="mb-3">
                <label for="vdesc" class="form-label">Description</label>
                <input type="text" id="vdesc" name="vdesc" required class="form-control">
              </div>
              <div class="mb-3">
                <label for="vprice" class="form-label">Price</label>
                <input type="text" id="vprice" name="vprice" required class="form-control">
              </div>
              <button type="submit" class="btn btn-danger rounded-0">+ Add Venue</button>
            </form>

            <!-- Add Venue Code -->
            <?php include './includes/add-venue.php'; ?>  
          </div>
        </div>

        <!-- Venue table -->
        <div class="card mb-4 shadow-sm rounded-0">
          <div class="card-body">
            <h5 class="card-title">Venue</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-primary ">
                  <tr>
                    <th>VID</th>
                    <th>Name of Venue</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="load_table">
                  <?php include './includes/get-venue.php'; ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Users Table -->
        <div class="card mb-4 shadow-sm rounded-0">
          <div class="card-body">
            <h5 class="card-title">Users</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-primary ">
                  <tr>
                    <th>UID</th>
                    <th>Username</th>
                    <th>Action</th>
                    <!-- <th>Delete</th> -->
                  </tr>
                </thead>
                <tbody id="load_table">
                  <?php include './includes/get-users.php'; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Order Table -->
        <div class="card mb-4 shadow-sm rounded-0" id="#order">
          <div class="card-body">
            <h5 class="card-title">Orders</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-primary ">
                  <tr>
                    <th>OID</th>
                    <th>VID</th>
                    <th>Username</th>
                    <th>Order Date </th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="load_table">
                  <?php include './includes/get-order.php'; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>