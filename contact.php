<!--Contact Section Start-->
<section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span> Us</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="inputBox">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <input type="number" name="number" placeholder="Number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <textarea name="message"  required placeholder="Your Message" id="" cols="30" rows="10"></textarea> 
            <input type="submit" name="submit" value="submit" class="btn">
        </form>
        <?php
            include './partials/config.php';
            if (isset($_POST['submit'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $number = htmlspecialchars($_POST['number']);
                $subject = htmlspecialchars($_POST['subject']);
                $message = htmlspecialchars($_POST['message']);
                $sql = "INSERT INTO `contacts` (`name`, `email`, `number`, `subject`, `message`) VALUES ('$name', '$email', '$number', '$subject', '$message')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: ". $_SERVER['PHP_SELF'] . "?success=true");
                }

                if (!$result) {
                    
                    echo "<div class='custom-alert error'>Error: " . mysqli_error($conn) . "</div>";
                } else {
                    echo "<div class='custom-alert success'>Message sent successfully!</div>";
                }
                exit();
            }
            ?>
    </section>