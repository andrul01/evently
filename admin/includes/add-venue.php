<?php
include "./includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['vimage'])) {
    $errors = array();

    $file_name = $_FILES['vimage']['name'];
    $file_size = $_FILES['vimage']['size'];
    $file_tmp  = $_FILES['vimage']['tmp_name'];
    $file_type = $_FILES['vimage']['type'];

    $tmp = explode('.', $file_name);
    $file_ext = strtolower(end($tmp));
    $extensions = array("jpeg", "jpg", "png");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be exactly 2 MB or less';
    }

    $name = mysqli_real_escape_string($conn, $_POST['vname'] ?? '');
    $desc = mysqli_real_escape_string($conn, $_POST['vdesc'] ?? '');
    $price = mysqli_real_escape_string($conn, $_POST['vprice'] ?? '');

    if (empty($name)) $errors[] = "Venue name is required.";
    if (empty($desc)) $errors[] = "Venue description is required.";
    if (empty($price)) $errors[] = "Venue price is required.";

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "images/" . $file_name);

        $sql = "INSERT INTO `venue` (`vname`, `vdesc`, `vprice`, `vimage`) VALUES ('$name', '$desc', '$price', '$file_name')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./dashboard.php?venue=added");
            exit();
        } else {
            echo '<div class="alert alert-danger mt-3">Venue Not Added.</div>';
        }
    } else {
        echo '<div class="alert alert-danger mt-3"><ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul></div>';
    }
}
?>
