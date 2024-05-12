<?php

include 'data.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `users`(`first_name`,`last_name` ,`email`,  `city`, `message`) 
            VALUES ('$first_name','$last_name','$email','$city','$message')";

if ($conn->query($sql) === TRUE) {
   
    header("Location: index.php"); 
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 


<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/mrittik/light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:46:44 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="../assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="../assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="../assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="../assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="../assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Creative Dudes  - Modern Designers </title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>


    <body class="bg-white">
        

        <!-- Preloader -->
        <?php include 'pre-loader.php'; ?>


        <!-- Color Mode Switcher -->
		<div id="mode_switcher" class="d-none">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <?php include 'header.php'; ?>


        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
            <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
			<div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

            <!-- Footer-->
            <footer class="footer p-0">
                <div class="footer_inner pb-0">
                    <div class="footer_elements d-flex align-items-center justify-content-center">
                        <div class="footer_elements_inner">
                            <div class="footer_social">
                                <ul class="social_list justify-content-center">
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="youbetube"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="terms_condition">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>Creative Dudes 2024. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>
        <div class="page_header_inner">


		<!-- Page Header -->
        <div class="page_header">
            <div class="page_header_inner">
                <div class="container">
                    <div class="page_header_content d-flex align-items-center justify-content-between">
                        <h2 class="heading">Contact</h2>
                        <ul class="breadcrumb d-flex align-items-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>

        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <section class="gmap box_padding">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1617.1290195215709!2d76.99143361841148!3d10.659020058577731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba839cb7e1996c3%3A0xaf97db611e990047!2sKumaran%20Nagar%20Mosque!5e0!3m2!1sen!2sin!4v1712928551196!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>

            <section class="contact_us bg-dark-200">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="section-header">
                                <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                                <p class="$gray-600">The talent at Mrittik runs wide and deep. Across many markets, geographies and typologies, our team members are some of the finest professionals in the industry.. We’ve grouped our work into five categories: places, venues, spaces, experiences and events.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="home_contact">
                                <form action="contact.php" method="POST">
                                <input class="form-control form-control-lg" name="first_name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="last_name" id="name" type="tel" placeholder="Your Number*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="city" id="city" type="text" placeholder="Your city*" required aria-label=".form-control-lg example">
                                    <textarea class="form-control pt-4" name="message" id="message" placeholder="Your Message" rows="3"></textarea>
                                    <div class="btn_group">
                                        <button type="submit" class="btn olive">Send Mail</button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
            </section>
        </main>

        <?php include 'footer.php'; ?>


        <div class="totop">
            <a href="#">UP</a>
        </div>

        <!-- Page Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>

        <!-- Core JS -->
        <script src="../assets/js/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        
        
        <!-- Swiper for Slider Type -->
        <script src="../plugins/swiper/swiper-bundle.min.js"></script>
        
        

        <!-- Cursor Effect -->
        <script src="../plugins/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="../plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="../assets/js/theme.js"></script>
        
        <!-- Google Map Calling -->
	    <script src="../assets/js/map.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUiaBC-cJ0wcEtqCUtoXF3I91o9wS42gQ"></script>
    </body>

<!-- Mirrored from wpthemebooster.com/demo/themeforest/php/mrittik/light/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:46:44 GMT -->
</php>