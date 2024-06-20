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

    $place = $_POST['select-place'];
    $s_name = $_POST['s-name'];
    $s_phone = $_POST['s-phone'];
    $s_email = $_POST['s-email'];
    $sql = "INSERT INTO `service_form` (`Sr_no`, `Place`, `Name`, `Phone`, `Email`, `date`) VALUES (NULL, '$place', '$s_name', '$s_phone', '$s_email', current_timestamp())";

    // $result = mysql_query($con,$sql);
    if($con->query($sql) == true){
    //     echo "Successfully inserted";

    //     Flag for successful insertion
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
    <link rel="stylesheet" href="styles/services.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/form2.css">

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
    <ul class="main-list">

        <li>
            <div class="rows">
                <img class="pics" width="230"
                    src="images/goa.jpg"
                    alt="Goa">
                <div>
                    <h2 class="place">Goa</h2>
                    <div class="desc">Most people are surprised at how many things there are to do in Goa apart from the beach and nightlife. This includes water sports and adventure activities, hot air ballooning, cooking lessons, exploring old forts, seeing the spice plantations, browsing museums and art galleries, bird watching at Doctor Salim Ali Bird Sanctuary, hiking in the nature reserves, yoga and natural therapies, cruising along the Mandovi River in a private yacht, betting at the casinos, listening to live jazz music, and of course shopping.</div>
                    <br>
                    <!-- <a class="read-more" href="#">Read more</a> -->
                </div>
            </div>
            <br>
            <hr>
        </li>

        <li>
            <div class="rows">
                <img class="pics" width="230"
                    src="images/taj mahal.jpg"
                    alt="Taj Mahal">
                <div>
                    <h2 class="place">Taj Mahal</h2>
                    <div class="desc">The Taj Mahal looms fairytale-like from the banks of the Yamuna River. It's India’s most recognized monument and is also one of the Seven Wonders of the World. The monument dates back to 1632 and is actually a tomb that contains the body of Mumtaz Mahal—the wife of Mughal emperor Shah Jahan.
                        The Taj Mahal appears to gradually alter its color in the changing light of the day. It’s well worth the effort to get up early and spend sunrise there, as it majestically reveals itself. Visiting around dawn will also enable you to beat the huge crowds that start arriving later in the morning.
                    </div>
                    <br>
                    <!-- <a class="read-more" href="#">Read more</a> -->
                </div>
            </div>
            <br>
            <hr>
        </li>

        <li>
            <div class="rows">
                <img class="pics" width="230"
                    src="images/Ladakh.jpg"
                    alt="Taj Mahal">
                <div>
                    <h2 class="place">Ladakh</h2>
                    <div class="desc">Planning a trip to Leh Ladakh this year? Nestled in the Trans-Himalayan region, in the state of Jammu and Kashmir in North India, Ladakh has recently become one of the most popular summer holiday destinations in India. Riding across high-altitude mountain passes, visiting monasteries, attending festivals and camping next to stunning high-altitude lakes are the major draws of Ladakh.

                        In addition to its spellbinding landscapes, Ladakh is renowned for its ancient Buddhist monasteries. Ladakh is often dubbed ‘Little Tibet’, as it shares an international boundary with Tibet and is home to a sizable population of Tibetan Buddhists.</div>
                    <br>
                    <!-- <a class="read-more" href="#">Read more</a> -->
                </div>
            </div>
            <br>
            <hr>
        </li>

        <li>
            <div class="rows">
                <img class="pics" width="230"
                    src="images/manali.png"
                    alt="Taj Mahal">
                <div>
                    <h2 class="place">Manali</h2>
                    <div class="desc">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.
                        Manali has many trekking options around it, making it a great base for exploring this side of Himalayas. River Beas provides great rafting options in the nearby town of Kullu. Adjoining Parvati river, lies the Parvati Valley with  Kasol, Manikaran, Tosh and small villages attracting travellers for longer stays.
                        You can also able to find out several picturesque sight-seeing spots from there.
                    </div>
                    <br>
                    <!-- <a class="read-more" href="#">Read more</a> -->
                </div>
            </div>
            <br>
            <hr>
        </li>


    </ul>
</section>

<section>
    <form action="services.php" method="post" class="form2">
        <div class="outter-form">
            <div class="form2-title">
                <p>BOOK</p>
            </div>
            <hr>
            <div class="inner-form">
                <p>Select a place :</p>
                <div class="radio-button">
                    <input type="radio" name="select-place" value="Taj Mahal" class="form2-radio-button">
                    <label for="Taj Mahal">Taj Mahal</label>
                    <br>
                    <input type="radio" name="select-place" value="Goa" class="form2-radio-button">
                    <label for="Goa">Goa</label>
                    <br>
                    <input type="radio" name="select-place" value="Manali" class="form2-radio-button">
                    <label for="Manali">Manali</label>
                    <br>
                    <input type="radio" name="select-place" value="Ladakh" class="form2-radio-button">
                    <label for="Ladakh">Ladakh</label>
                </div>
                    
                <br>
                <span>Enter Your Name : </span>
                <input type="text" name="s-name" class="travel-form-text" id="travel-form-name" placeholder="Name" required="required" 
                    data-error="Name is required.">
                <br>

                <span>Enter Your Phone no. : </span>
                <input type="text" name="s-phone" class="travel-form-text" id="travel-form-phone" placeholder="Phone Number" required="required" 
                    data-error="Email is required.">
                <br>

                <span>Enter Your Email-ID : </span>
                <input type="email" name="s-email" class="travel-form-text" id="travel-form-email" placeholder="Email" required="required" 
                    data-error=" is required.">
                <br>

                <div class="form2-submit-button">
                    <button type="submit" name="submit" id="contact-submit-button">send message</button>
                </div>
            </div>
        </div>
    </form>
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







<!-- INSERT INTO `contact_form` (`sr_no`, `name`, `email`, `subject`, `message`, `dt`) VALUES (NULL, 'hi', 'hiI@GMAIL.COM', 'asdfghjkl', 'zxcvbnm', current_timestamp()); -->

<!-- ALTER TABLE service_form AUTO_INCREMENT = 1 -->