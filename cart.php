<?php
session_start();
include './partials/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $orderid = $_POST['oid'];
    $username = $_SESSION['username'];
    $vid = intval($_POST['vid']);
    $date = $_POST['date'];
    $status = "pending";

    $sql = "INSERT INTO cart (vname, vid, odate, status) VALUES ('$username', '$vid', '$date', '$status')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ./index.php?orderbooked=success");
        exit();
    } else {
        echo "Error adding to cart: " . mysqli_error($conn);
    }
}
?>
