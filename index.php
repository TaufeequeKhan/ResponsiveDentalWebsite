<?php
    
    $conn = mysqli_connect('localhost','root','','dentist_db') or die('connection failed');
    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,date) 
                                       VALUES('$name','$email','$number','$date')") or die('query failed');
        if($insert)
        {
            $message[] = 'Appointment Booked Successfully!';
        }
        else
        {
            $message[] = 'Appointment Booking Failed!';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dentist Website</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header Section start -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Dental <span>Care</span></a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>
                <a href="#contact" class="link-btn">Make Appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header Section end -->

    <!-- Home section starts -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten Your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, impedit consequatur? Fugiat
                        minima molestiae recusandae.</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Home section ends -->

    <!-- About Section Starts -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="./images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>True healthcare For your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ab molestias nobis ducimus
                        vitae, odio debitis blanditiis culpa enim nemo, eaque quisquam quo harum possimus, ex a repellat
                        eveniet ea?</p>
                    <a href="#contact" class="link-btn">Make Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Ends -->

    <!-- Services section starts -->
    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/icon-1.svg" alt="">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>

            <div class="box">
                <img src="./images/icon-2.svg" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>

            <div class="box">
                <img src="./images/icon-3.svg" alt="">
                <h3>Oral hygiene Expert</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>

            <div class="box">
                <img src="./images/icon-4.svg" alt="">
                <h3>Root Canal Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>

            <div class="box">
                <img src="./images/icon-5.svg" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>

            <div class="box">
                <img src="./images/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illo!</p>
            </div>
        </div>
    </section>
    <!-- Services section Ends -->

    <!-- Process Section Starts -->
    <section class="process">
        <h1 class="heading">Work Process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, veritatis.</p>
            </div>

            <div class="box">
                <img src="./images/process-2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, veritatis.</p>
            </div>

            <div class="box">
                <img src="./images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, veritatis.</p>
            </div>
        </div>
    </section>
    <!-- Process Section Ends -->

    <!-- Reviews Section Starts -->
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ullam libero assumenda minus
                    modi alias aut velit animi omnis quod?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Taufique Khan</h3>
                <span>Satisfied Clients</span>
            </div>

            <div class="box">
                <img src="./images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ullam libero assumenda minus
                    modi alias aut velit animi omnis quod?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Emilia Clarke</h3>
                <span>Satisfied Clients</span>
            </div>

            <div class="box">
                <img src="./images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ullam libero assumenda minus
                    modi alias aut velit animi omnis quod?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Deo</h3>
                <span>Satisfied Clients</span>
            </div>
        </div>
    </section>
    <!-- Reviews Section Ends -->

    <!-- Contact Section Starts -->
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <span>Your Name: </span>
            <input type="text" name="name" placeholder="Enter Your Name" class="box" required>
            <span>Your Email: </span>
            <input type="email" name="email" placeholder="Enter Your Email" class="box" required>
            <span>Your Number: </span>
            <input type="number" name="number" placeholder="Enter Your Number" class="box" required>
            <span>Appointment Date: </span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" name="submit" value="Make Appointment" class="link-btn">
        </form>
    </section>
    <!-- Contact Section Ends -->

    <!-- Footer Section Starts -->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Pune, India - 123123</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours</h3>
                <p>00:07AM To 10:00PM</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>taufique@gmail.com</p>
                <p>demotest@gmail.com</p>
            </div>
        </div>
        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Taufique Khan</span></div>
    </section>
    <!-- Footer Section Ends -->


    <!-- custome JS File Link -->
    <script src="script.js"></script>
</body>

</html>