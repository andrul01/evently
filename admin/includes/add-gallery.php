<?php

include "./includes/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $tmp = explode('.', $file_name);
    $file_ext = strtolower(end($tmp));
    $extensions = array("jpeg", "jpg", "png");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be exactly 2 MB or less';
    }

    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';

    if (empty($name)) {
        $errors[] = "Gallery name is required.";
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "images/" . $file_name);

        $sql = "INSERT INTO `gallery` (`gname`, `gimage`) VALUES ('$name', '$file_name')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./dashboard.php");
            exit();
        } else {
            echo '<div class="alert alert-danger mt-3">Gallery Not Added.</div>';
        }
    }
    else {
        echo '
            <div class="alert alert-danger mt-3">
                <ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo '
                </ul>
            </div>';
    }
}
