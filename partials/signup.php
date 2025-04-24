   <!-- Signup Modal -->
   <div class="signup-modal" id="signupModal">
       <div class="signup-box">
           <span class="close-btn" id="closeSignup">&times;</span>
           <h2>Sign Up</h2>
           <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
               <input type="text" name="username" placeholder="Full Name" required>
               <input type="email" name="email" placeholder="Email Address" required>
               <input type="password" name="password" placeholder="Password" required>
               <input type="password" name="cpassword" placeholder="Confirm Password" required>
               <input type="submit" name="signup" value="Create Account" class="submit-btn">
           </form>

           <!-- SignUp  -->
           <?php
            if (isset($_POST['signup'])) {

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                $existQuery = "SELECT * FROM `users` WHERE email = '$email'";
                $result = mysqli_query($conn, $existQuery);
                $numRows = mysqli_num_rows($result);

                if ($numRows > 0) {
                    echo "<p style='color:red;'>Email already in use</p>";
                } else {
                    if ($password === $cpassword) {
                        $hash = password_hash($password, PASSWORD_DEFAULT);

                        // You said your table has 'password' and 'cpassword', so we insert both
                        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `cpassword`, `dt`) 
                                    VALUES ('$username', '$email', '$hash', '$hash', CURRENT_TIMESTAMP)";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            header("Location: ./index.php?signupsuccess=true");
                            // exit();
                        } 
                        else {
                            header("Location: ./index.php?signupsuccess=false");
                        }
                    } 
                    else {
                        header("Location: ./index.php?signupsuccess=false");
                    }
                }
            }
            ?>
            
       </div>
   </div>