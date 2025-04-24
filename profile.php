<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--swiper js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <!--LINK FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <!--link style css-->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/favicon.svg" type="image/svg+xml">
    <title>Evently - Profile</title>
</head>

<body>

    <!-- Database connection -->
    <?php include './partials/config.php';  ?>

    <!-- Header  -->
    <?php include "./partials/header.php"; ?>

    <div class="profile-wrapper">
        <div class="profile-container">
            <!-- Profile Image and Basic Info -->
            <div class="profile-header">
            <img src="./images/review1.jpeg" alt="User Image" class="profile-image">
            <h3>Andrul</h3>
            <small>@andrul</small>
            <div>
                <button class="edit-profile-btn"><i class="fas fa-user-edit"></i> Edit Profile</button>
            </div>
            </div>

            <!-- Profile Info Cards -->
            <div class="profile-card">
            <h5>Username</h5>
            <p>@andrul</p>
            </div>

            <div class="profile-card">
            <h5>Full Name</h5>
            <p>Andrul I</p>
            </div>

            <div class="profile-card">
            <h5>Bio</h5>
            <p>Gammer</p>
            </div>

            <div class="profile-card">
            <h5>Contact</h5>
            <p>+91 7796064374</p>
            </div>

            <div class="profile-card">
            <h5>Email</h5>
            <p>andrul@gmail.com</p>
            </div>

            <div class="profile-card">
            <h5>Gender</h5>
            <p>Male</p>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include './partials/footer.php'; ?>

    <!--custom js--> 
    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

</body>
</html>