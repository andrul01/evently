<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ./index.php");
    exit();
}
include './partials/config.php'; 

?>

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
    <title>Evently - Gallery</title>
</head>

<body>

    <!-- Header  -->
    <?php include "./partials/header.php"; ?>

    <!-- gallery section start -->
    <section id="gallery" class="gallery">
        <h1 class="heading">Choose <span>Events</span></h1>
        <div class="boxContainer">
            <?php
            include './partials/config.php';
            $sql = "SELECT * FROM gallery";
            $result = mysqli_query($conn, $sql);
            while ($row = $result->fetch_assoc()) {
                $gid = $row['gid'];
                $gname = $row['gname'];
                $gimage = $row['gimage'];
                echo '
                    <div class="box">
                        <img src="./admin/images/' . $gimage . '" alt="">
                        <h3 class="title">' . $gname . '</h3>
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="./venue.php?gid='.$gid.'" class="fas fa-eye"></a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </section>

    <!--Footer-->
    <?php include './partials/footer.php'; ?>

    <!--custom js-->
    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

</body>

</html>