<!-- Login Modal -->
<div class="signup-modal" id="loginModal">
    <div class="signup-box">
        <span class="close-btn" id="closeLogin">&times;</span>
        <h2>Login</h2>
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login" class="submit-btn">
        </form>

        <!-- Login -->
        <?php
        if (isset($_POST['login'])) {
            // include './config.php'; // DB connection

            $email = $_POST['email'];
            $password = $_POST['password'];

            $loginQuery = "SELECT * FROM `users` WHERE email = '$email'";
            $result = mysqli_query($conn, $loginQuery);
            $numRows = mysqli_num_rows($result);

            if ($numRows === 1) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $email;

                    header("Location: ./index.php?loginsuccess=true");
                    exit();
                } 
                else {
                    header("Location: ./index.php?loginsuccess=false");
                }
            } 
            else {
                header("Location: ./index.php?loginsuccess=false");
            }
        }
        ?>
    </div>
</div>