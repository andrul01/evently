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
    <title>Evently - Venue</title>
</head>

<body>

    <!-- Header  -->
    <?php include "./partials/header.php"; ?>

    <!-- Venue Section Start -->
    <section id="venue" class="gallery">
        <h1 class="heading">Our <span>Venues</span></h1>
        <div class="boxContainer">
            <?php
            include './partials/config.php';
            $sql = "SELECT * FROM venue";
            $result = mysqli_query($conn, $sql);
            while ($row = $result->fetch_assoc()) {
                $vid = $row['vid'];
                $vname = $row['vname'];
                $vimage = $row['vimage'];
                $vdesc = $row['vdesc'];
                $vprice = $row['vprice'];

                echo '
                    <div class="box">
                        <img src="./admin/images/' . $vimage . '" alt="' . $vname . '">
                        <h3 class="title">' . $vname . '</h3>
                        <p class="desc">' . $vdesc . '</p>
                        <p class="price">Price: ₹' . $vprice . '</p>
                        <div class="icons">
                            
                            <a href="./book.php?vid=' . $vid . '" class="btn btn-danger" style="margin-top: 10px; display: inline-block; padding: 8px 16px; background:white; color: #e74c3c; text-decoration: none;;">Book This Venue</a>
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