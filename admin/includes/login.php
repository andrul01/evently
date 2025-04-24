<!-- login code -->
<?php
if (isset($_POST['login'])) {

    include "./includes/config.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT id, username, password FROM users WHERE username = '{$username}' AND '{$password}'";
    $result = mysqli_query($conn, $sql) or die('Query Failed');

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

            header("Location: ./dashboard.php");
        }
    } else {
        echo '<div class="alert alert-danger mt-3">Username and Password are not matched.</div>';
    }
}
?>