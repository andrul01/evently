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


    <?php
        if (isset($_GET['vid'])) {
            $vid = intval($_GET['vid']);
            $sql = "SELECT * FROM venue WHERE vid = $vid";
            $result = mysqli_query($conn, $sql);

            if ($row = mysqli_fetch_assoc($result)) {
                $vname = $row['vname'];
                $vimage = $row['vimage'];
                $vdesc = $row['vdesc'];
                $vprice = $row['vprice'];

                echo '
                <section class="cart" style="padding: 80px 60px;">
                    <div class="container">
                        <div class="venue-box" style="border: 1px solid #ccc; padding: 20px;">
                            <img src="./admin/images/' . $vimage . '" alt="' . $vname . '" style="max-width: 100%; height: auto;">
                            <h3 style="font-size:20px;">' . $vname . '</h3>
                            <p>' . $vdesc . '</p>
                            <p style="font-size:18px;"><strong>Price:</strong> ₹' . $vprice . '</p>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="vid" value="' . $vid . '">
                                <label for="date" style="font-size:15px;">Select Date:</label>
                                <input type="date" name="date" required><br><br>
                                <button type="submit" class="btn btn-primary">Order</button>
                            </form>
                        </div>
                    </div>
                </section>';
            } else {
                echo "<p>Venue not found.</p>";
            }
        } else {
            echo "<p>No venue selected.</p>";
        }
    ?>



    <!--Footer-->
    <?php include './partials/footer.php'; ?>

    <!--custom js-->
    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

</body>

</html>