<?php
if(isset($_POST['submit'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "travel";
    $con = mysqli_connect($server, $username, $password,$database);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contact_form` (`Sr_no`, `Name`, `Email`, `Subject`, `Message`, `Date`) VALUES (NULL, '$name', '$email', '$subject', '$message', current_timestamp())";

    // $result = mysql_query($con,$sql);
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav">
                <ul class="navlist">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="right">
                    <input type="text" id="search">
                    <button class="btn search">Search</button>
                </div>
            </div>
        </nav>
    </header>
</body>



<section>
    <div class="contact-container">
        <div class="contact-outer">

            <div class="contact-title">
                <p>Contact Us</p>
            </div>
            <div>
                <div class="contact-inner">
                <form action="contact.php" method="post" class="contact-form">
                        <input type="text" class="contact-form-text" name="name" id="contact-form-name" placeholder="Name" required="required" 
                            data-error="Name is required.">
                        <input type="text" class="contact-form-text" name="email" id="contact-form-email" placeholder="E-mail" required="required"
                            data-error="E-mail is required.">
                        <input type="text" class="contact-form-text" name="subject" id="contact-form-subject" placeholder="Subject" required="required"
                            data-error="Subject is required.">
                        <input type="text" class="contact-form-text" name="message" id="contact-form-row-message" placeholder="Message" required="required"
                            data-error="Please, write us a message.">
                            <div class="contact-submit-div">

                                <button name = "submit" type="submit" id="contact-submit-button">send
                                    message<span></span><span></span><span></span></button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
        <div class="footer-content">

            <!-- <h3> TRAVELY </h3> -->
            <br>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, deleniti corrupti aliquid omnis ad
                unde voluptatibus, quos ipsa dolores perspiciatis nobis obcaecati aperiam sapiente recusandae. Nihil
                dolor, maxime, velit adipisci dolorum cupiditate necessitatibus recusandae, vero totam eligendi harum
                ipsam nobis consequuntur minus nesciunt et. Iusto quaerat mollitia qui pariatur molestias.</p> -->
            <div class="socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2020  designed by-saa</p>
        </div>
        <br>
        <br>
    </footer>
</html>



<!-- INSERT INTO `contact_form` (`sr_no`, `name`, `email`, `subject`, `message`, `dt`) VALUES (NULL, 'SAKSI', 'SAKSI@GMAIL.COM', 'asdfghjkl', 'zxcvbnm', current_timestamp()); -->


<!-- ALTER TABLE contact_form AUTO_INCREMENT = 1 -->